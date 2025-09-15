<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dasboard', function () {
    return view('Dasboard');
})->name('dasboard');

Route::get('/Dataanggota', function () {
    return view('Dataanggota');
})->name('Dataanggota');

Route::get('/Dataapengambilan', function () {
    return view('Dataapengambilan');
})->name('Dataapengambilan');

Route::get('/Databuku', function () {
    return view('Databuku');
})->name('Databuku');

Route::get('/Datalaporan', function () {
    return view('Datalaporan');
})->name('Datalaporan');

Route::get('/Datapinjaman', function () {
    return view('Datapinjaman');
})->name('Datapinjaman');

Route::get('/Katalogbuku', function () {
    return view('Katalogbuku');
})->name('Katalogbuku');

Route::get('/Riwayatpeminjaman', function () {
    return view('Riwayatpeminjaman');
})->name('Riwayatpeminjaman');