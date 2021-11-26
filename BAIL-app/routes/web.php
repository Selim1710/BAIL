<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\EditProductController;
use App\Http\Controllers\Backend\EditStockController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Backend\ManageOrderController;
use Illuminate\Support\Facades\Route;

// User Interface

Route::get('/', [UsersController::class, 'home']);




// Admin panel

// Route::group(['prefix'=>'admin'], function(){
//     Route::get('/', [AdminController::class, 'home']);
//     Route::get('/manage_admin', [ManageAdminController::class,'admin']);

// });


Route::get('/admin', [AdminController::class, 'home'])->name('home');

//Route for Product update and delete data

Route::get('/product',[EditProductController::class,'index'])->name('product.index');
Route::get('/product/create',[EditProductController::class,'create'])->name('product.create');
Route::post('/product/store', [EditProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}',[EditProductController::class,'edit'])->name('product.edit');
Route::post('/product/update',[EditProductController::class,'update'])->name('product.update');
Route::get('/product/delete/{id}',[EditProductController::class,'destroy'])->name('product.destroy');



//Route for order

Route::get('/order',[ManageOrderController::class,'index'])->name('order.index');





//Route for stock

Route::get('/stock',[EditStockController::class,'index'])->name('stock.index');