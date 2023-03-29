<?php

use App\Http\Controllers\AltasyBajas;
use Illuminate\Support\Facades\Route;


Route::get('/', [AltasyBajas::class, 'index']);

Route::get('/AltasYBajas', [AltasyBajas::class, 'AltasYBajas']);

Route::get('/create', [AltasyBajas::class, 'create']);
Route::post('/store', [AltasyBajas::class, 'store']);