<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/',[StudentsController::class,'index'])->name('index1');

Route::post('/',[StudentsController::class,'create']);

Route::get('/edit/{id}',[StudentsController::class,'edit'])->name('edit');

Route::put('/edit/{id}',[StudentsController::class,'update'])->name('update');

Route::get('/delete/{id}',[StudentsController::class,'destroy'])->name('delete');


