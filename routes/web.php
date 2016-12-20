<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index');


//后台管理路由 注意" 'as' => 'admin." 为路由组定义了路由名称前缀
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    //登录,登出
    Route::get('login', 'Auth\AuthController@getLogin')->name('login');
    Route::post('login', 'Auth\AuthController@postLogin')->name('login');
    Route::get('logout', 'Auth\AuthController@logout')->name('logout');
    //注册
    Route::get('register', 'Auth\AuthController@getRegister')->name('register');
    Route::post('register', 'Auth\AuthController@postRegister')->name('register');
    //登录成功重定向
    Route::get('index', 'HomeController@index')->name('index');

    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
});
