<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\EditAccessoriesController;
use App\Http\Controllers\Backend\EditProductController;
use App\Http\Controllers\Backend\EditStockController;
use App\Http\Controllers\Backend\ManageOrderController;
use App\Http\Controllers\Frontend\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UsersController::class, 'home'])->name('home.user');









Route::group(['prefix'=>'admin'], function(){

Route::get('/', [AdminController::class, 'home'])->name('home');

Route::get('/product',[EditProductController::class,'index'])->name('product.index');
Route::get('/product/create',[EditProductController::class,'create'])->name('product.create');
Route::post('/product/store', [EditProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}',[EditProductController::class,'edit'])->name('product.edit');
Route::post('/product/update',[EditProductController::class,'update'])->name('product.update');
Route::get('/product/delete/{id}',[EditProductController::class,'destroy'])->name('product.destroy');

Route::get('/order',[ManageOrderController::class,'index'])->name('order.index');

Route::get('/stock',[EditStockController::class,'index'])->name('stock.index');

Route::get('/accessories',[EditAccessoriesController::class,'index'])->name('accessories.index');
Route::get('/accessories/create',[EditAccessoriesController::class,'create'])->name('accessories.create');
Route::post('/accessories/store',[EditAccessoriesController::class,'store'])->name('accessories.store');

});