<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Libros;

Route::get('/', [Libros::class, 'index'])->name("index");
Route::get('/create', [Libros::class, 'create'])->name("create");
Route::post('/store', [Libros::class, 'store'])->name("store");
Route::get('/show/{id}', [Libros::class, 'show'])->name("show");
Route::get('/edit/{id}', [Libros::class, 'edit'])->name("edit");
Route::put('/update/{id}', [Libros::class, 'update'])->name("update");
Route::delete('/destroy/{id}', [Libros::class, 'destroy'])->name("destroy");

