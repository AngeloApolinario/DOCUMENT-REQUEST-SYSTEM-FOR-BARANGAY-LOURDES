<?php

use App\Http\Controllers\RequestItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/residents', function () {
    return view('residents');
});
Route::get('/documents', function () {
    return view('documents');
});
Route::get('/documents-admin', function () {
    return view('documents-admin');
});
Route::get('/daily_transactions', function () {
    return view('daily_transactions');
});

Auth::routes();

Route::resource('requests', RequestItemController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
