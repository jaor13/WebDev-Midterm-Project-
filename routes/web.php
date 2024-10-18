<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/narrative/{id}', function ($id) {
    switch ($id) {
        case 1:
            return view('narrative1');
        case 2:
            return view('narrative2');
        case 3:
            return view('narrative3');
        case 4:
            return view('narrative4');
        default:
            abort(404); 
    }
})->name('narrative');

Route::get('/narrative1', function () {
    return view('narrative1');
})->name('narrative1');

Route::get('/narrative2', function () {
    return view('narrative2');
})->name('narrative2');

Route::get('/narrative3', function () {
    return view('narrative3');
})->name('narrative3');

Route::get('/narrative4', function () {
    return view('narrative4');
})->name('narrative4');