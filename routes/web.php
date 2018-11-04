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

//nama routing halaman about -> About
//ketika mengambil about, akan mengembalikan nilai view
Route::get('about', function () {
    return view('about');
});

Route::get('pesan', function () { //di welcome routingnya pesan
    return view('pesan'); //memanggil pesan.blade.php
});

Route::post('pesan/kirim', function () { //method post
    return view('pesan-kirim');
});


// Route::get('template', function () {
//     return view('layouts.master'); //namafolder.namafile
// }); hanya utk mencoba layout master

Route::get('coba1', function () {
    return view('coba1');
});

Route::get('coba2', function () {
    return view('coba2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
 Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
 Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
 Route::get('/', 'AdminController@index')->name('admin.dashboard');
 });
