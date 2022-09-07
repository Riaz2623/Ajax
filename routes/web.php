<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/',[ProductController::class,'products'])->name('products');
Route::post('/add-product',[ProductController::class,'addproduct'])->name('add.product');
Route::post('/update-product',[ProductController::class,'updateproduct'])->name('update.product');
Route::post('/delete-product',[ProductController::class,'deleteproduct'])->name('delete.product');
Route::get('/pagination/paginate-data',[ProductController::class,'pagination']);
Route::get('/search-product',[ProductController::class,'searchproduct'])->name('search.product');
