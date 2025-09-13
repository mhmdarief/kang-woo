<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dasboard', function () {
    return view('Dasboard');
});

Route::get('/Dataanggota', function () {
    return view('Dataanggota');
});

Route::get('/Dataapengambilan', function () {
    return view('Dataapengambilan');
});

Route::get('/Databuku', function () {
    return view('Databuku');
});

Route::get('/Datalaporan', function () {
    return view('Datalaporan');
});

Route::get('/Datapinjaman', function () {
    return view('Datapinjaman');
});

Route::get('/Katalogbuku', function () {
    return view('Katalogbuku');
});

Route::get('/Riwayatpeminjaman', function () {
    return view('Riwayatpeminjaman');
});