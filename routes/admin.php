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

Route::get('/admin', function () {
    return 'welcome admin';
});
route:: namespace('front')->group(function (){
    route::get('users','UserController@showAdminName');
});

route:: group(['prefix' =>'user','namespace'=>'front'],function (){
    route::get('/','UserController@showAdminName');
    route::get('/user2','UserController@showAdminName2');
});
//route:: get('login',function (){
//   return 'must be login to access this route';
//})->name('login');
route::get('view','front\UserController@showAdminView');

Route::get('/about', function () {
    return view('about');
});
