<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('/fetch-data', [Controller::class, 'fetchData'])->name('data');

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/product-list', [Controller::class, 'productList'])->name('product-list');
Route::get('/product-add', [Controller::class, 'Addproduct'])->name('product-add');
Route::get('/product-edit/{id}', [Controller::class, 'Editproduct'])->name('product-edit');