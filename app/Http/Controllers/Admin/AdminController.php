<?php

namespace App\Http\Controllers\Admin;

use App\User;
/*use Illuminate\Http\Request;*/
use App\Http\Controllers\Controller;
/*use Illuminate\Support\Facades\Gate;*/
use Auth;


class AdminController extends Controller
{
    public function __construct()
    {
//        parent::__construct();
    }


    public function getUsersList() {

        $currentUser = Auth::user();
        $users = User::all();

        //dump($currentUser->roles);

        foreach ($currentUser->roles as $role) {

            if ($role['name'] != 'Admin') {
                return redirect()->back()->with('message', 'У Вас не достаточно прав!');
            }
        }

        //dd($users);
        return view('admin.list', array(
            'users'=>$users,
            'currentUser'=>$currentUser
        ));
    }

    public function show() {

        $currentUser = Auth::user();
        $data = ['title' => 'Панель администратора'];

        return view('admin.header', array(
            'currentUser'=>$currentUser,
            'data'=>$data
        ));
    }

}
