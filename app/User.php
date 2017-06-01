<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany('App\Role', 'user_role');
    }

    public function news() {
        return $this->hasMany('App\News', 'user_id');
    }

    protected $table = 'users';


    public function canDo($permission, $require = FALSE) {
        if (is_array($permission)) {
            /*var_dump($permission);*/
            foreach ($permission as $permName) {
                $permName = $this->canDo($permName);
                if ($permName && !$require) {
                    return true;
                }elseif (!$permName && $require) {
                    return false;
                }
            }
            return $require;
        }else {
            foreach ($this->roles as $role) {
                /*ddd($role->permissions);
                ddd($permission);*/
                foreach ($role->permissions as $perm) {
                    if (str_is($permission, $perm->name)) {
                        return true;
                    }
                }
            }
        };
    }
}
