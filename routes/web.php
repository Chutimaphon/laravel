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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home',function(){
// 	$name = "nan";
// 	$department = "computer enginerring";
// 	return view('index',compact('name','department'));
// });
Route::get('/index_1', function ()
 {
 	$id = "5735512007";
    return view('index_1',compact('id'));
});
Route::get('/','HomeController@home');
Route::get('/home','HomeController@index');
Route::get('/cat','HomeController@cat');

Route::post('/home','HomeController@report');