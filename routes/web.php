<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/profil', function () {
    return view('profilStaf', ['nama' => 'Hafidh Asyi']);
});

Route::get('/profil', function () {
    return view('profilStaf', ['nama' => 'Hafidh Asyi']);
});

Route::get('/profil', function () {
    return view('profilStaf', ['nama' => 'Hafidh Asyi']);
});

