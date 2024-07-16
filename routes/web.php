<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mylaravel/{nama?}', function ($nama='World') {
    return view('mylaravel', compact('nama'));
});

Route::get('/about/{nama?}', function ($nama='Kementerian Ekonomi') {
    return view('about', compact('nama'));
});
