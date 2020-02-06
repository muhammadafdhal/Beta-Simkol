<?php

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/guru', 'GuruController');
Route::resource('/siswa', 'SiswaController');
Route::resource('/tamu', 'BukutamuController');