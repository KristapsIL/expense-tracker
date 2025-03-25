<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CategoryController;

Route::resource('category', CategoryController::class);
Route::resource('expenses', ExpenseController::class);
