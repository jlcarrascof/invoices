<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

Route::resource('suppliers', SupplierController::class);

Route::resource('customers', CustomerController::class);

Route::get('/categories/reports', [CategoryReportController::class, 'index'])->name('categories.reports');
