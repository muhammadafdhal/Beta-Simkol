<?php

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/guru', 'GuruController');
Route::resource('/siswa', 'SiswaController');
Route::resource('/tamu', 'BukutamuController');
Route::resource('/materi', 'MateriController');
Route::resource('/mata-pelajaran', 'MapelController');
Route::resource('/kelas', 'KelasController');
Route::resource('/jadwal','JadwalPelajaranController');
Route::resource('/absen','AbsensiswaController');
Route::resource('/informasi','InfosekolahController');
Route::resource('/nilai','NilaiController');

//route galeri
Route::resource('/galeri','GaleriController');
Route::get('/storage/gl/{namafile}', function ($namafile) {
    $path=storage_path('app/galeri/'.$namafile);


    if (!File::exists($path)) {
        abort(404);
    }

    $file=File::get($path);
    $type=File::mimeType($path);
    $response=Response::make($file, 200);
    $response->header("Content-type", $type);

    return $response;
});