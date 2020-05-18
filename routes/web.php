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
    return view('homePage');
});

Auth::routes(['register' => false, 'password.request' => false, 'reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/addfaculty', function () {
    return view('AddFaculty/addpage');
});

Route::post('/feedback/add', 'feedbackController@create');
Route::get('/Online-Faculty/public/listfaculty', 'addfaculty@listfaculty');
Route::get('/Online-Faculty/public/listfaculty/show/{id}', 'addfaculty@show');
Route::get('/Online-Faculty/public/listfaculty/edit/{id}', 'addfaculty@edit');
Route::post('/faculty/add', 'addfaculty@create');
Route::post('/faculty/update/{id}', 'addfaculty@update');
