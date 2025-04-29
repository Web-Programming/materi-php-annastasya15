<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('beranda', function () {
    return view('beranda',
    [
        'name' => 'Aca',
        'email' => 'apriliatasya1504@gmail.com',
        'alamat' => 'jakarta'
    ]
);
});
Route::get('/berita/{id}/{judul}',function ($id, $judul){
    return view('berita', ['id' => $id, 'judul' => $judul]);
});
