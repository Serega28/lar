<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware'=>'web'], function () {

    Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute','as'=>'home']);

    Route::auth();
});

//admin
Route::group(['prefix'=>'admin', 'middleware'=>['web','auth']], function() {


    //admin
    Route::get('/', ['uses'=>'Admin\AdminController@show', 'as'=>'admin'], function() {
     /*   if (view()->exists('admin.header')) {
            $data = ['title' => 'Панель администратора'];
            return view('admin.header', $data);
        }*/
    });

    Route::get('/users', ['uses'=>'Admin\AdminController@getUsersList', 'as'=>'users']);
    Route::match(['get', 'post', 'delete'], '/edit/{users}', ['uses'=>'Admin\UsersEditController@execute', 'as'=>'usersEdit']);




    //admin/news
    Route::group(['prefix'=>'news'], function() {

        //admin/news
        Route::get('/', ['uses'=>'Admin\NewsController@showAllNews', 'as'=>'news']);
        //admin/news/add
        Route::get('/add', ['uses'=>'Admin\NewsController@showForm', 'as'=>'newsAdd']);
        Route::post('/add', ['uses'=>'Admin\NewsController@createNews', 'as'=>'newsAdd_n']);
        //admin/edit/2
        Route::get('/update/{id}', ['uses'=>'Admin\NewsController@showCurrentNews', 'as'=>'newsEdit']);
        Route::post('/update', ['uses'=>'Admin\NewsController@updateNews', 'as'=>'newsEdit_n']);
        /*Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses'=>'Admin\NewsController@edit', 'as'=>'newsEdit']);*/
    });


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





















