<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa',[SiswaController::class, 'index']);

Route::post('/siswa/create', [SiswaController::class, 'create']);

Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);

Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);

Route::get('/siswa/{id}/delete',[SiswaController::class, 'delete']);
