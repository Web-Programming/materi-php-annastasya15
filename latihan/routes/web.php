<?php

use App\Http\Controllers\ProdiController;
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
Route::get('/prodi/{id}/edit', [ProdiController::class, 'edit']);
Route::put('/prodi/{id}', [ProdiController::class, 'update']);
Route::get('/prodi/{id}', [ProdiController::class, 'show']);

    return view('berita', ['id' => $id, 'judul' => $judul]);
});


// membuat route ke halaman prodi index melalui controller ProdiController
// Route::get('/prodi/index', [ProdiController::class,'index']);

Route::resource('prodi',  ProdiController::class);