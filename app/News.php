<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    ////указываем модели с какой таблицей работать
    protected $table = 'news';

    protected $fillable = ['name', 'image', 'text'];

    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
