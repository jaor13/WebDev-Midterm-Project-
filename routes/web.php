<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/narrative1', function () {
    return view('narrative1');
})->name('narrative1');

Route::get('/narrative2', function () {
    return view('narrative2');
})->name('narrative2');

Route::get('/narrative3', function () {
    return view('narrative3');
})->name('narrative3');