<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Nombres;

Route::get('/', [Nombres::class, 'index'])->name("index");
Route::get('/create', [Nombres::class, 'create'])->name("create");
Route::post('/store', [Nombres::class, 'store'])->name("store");
Route::get('/show/{id}', [Nombres::class, 'show'])->name("show");
Route::get('/edit/{id}', [Nombres::class, 'edit'])->name("edit");
Route::put('/update/{id}', [Nombres::class, 'update'])->name("update");
Route::delete('/destroy/{id}', [Nombres::class, 'destroy'])->name("destroy");
