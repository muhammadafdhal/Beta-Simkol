<?php

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/guru', 'GuruController@index')->name('guru');

Route::get('/siswa', 'SiswaController@index')->name('siswa');
Route::get('/siswa/tambah', 'SiswaController@create')->name('siswa');
Route::post('addPost', 'SiswaController@addPost');
