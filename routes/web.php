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
  return view('home');
})->name('home');
Route::get('/register', function () {
  return view('register');
});
Route::get('/posts', function () {
  return view('posts');
});
Route::get('/news', function () {
  return view('news');
});
Route::get('/login', function () {
  return view('login');
});



Route::post('/form-data', 'FormController@append');
Route::post('/login-data', 'LoginController@auth');
