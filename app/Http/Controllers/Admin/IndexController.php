<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
  /*  public function __construct()
    {
        parent::__construct();

        if (Gate::denies('VIEWS_ADMIN')) {
            abort(403);
        }
    }*/
    public function __construct()
    {
        $this->middleware('auth');
    }
}
