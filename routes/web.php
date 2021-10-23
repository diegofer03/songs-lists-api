<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('index');
});
Route::resource('/song',SongController::class);
Route::get('/song/{id}/confirmDelete',[SongController::class, 'confirmDelete']);
Route::get('/pdf', [PDFController::class,'PDF'])->name('downloadPDF');
