<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\EditAccessoriesController;
use App\Http\Controllers\Backend\EditProductController;
use App\Http\Controllers\Backend\EditStockController;
use App\Http\Controllers\Backend\ManageCustommerController;
use App\Http\Controllers\Backend\ManageOrderController;
use App\Http\Controllers\Frontend\AccessoryOrderController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductOrderController;
use App\Http\Controllers\Frontend\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('website.index');

Route::group(['prefix'=>'website'],function(){

    Route::get('/user/login',[UsersController::class,'index'])->name('users.login');
    Route::post('/user/do/login',[UsersController::class,'doLogin'])->name('user.do.login');
    Route::get('/user/registration',[UsersController::class,'create'])->name('users.registration.create');
    Route::post('/user/registration/store',[UsersController::class,'store'])->name('users.registration.store');
    Route::get('/user/logout',[UsersController::class,'logout'])->name('user.logout');


    Route::get('/user/accessory/order',[AccessoryOrderController::class,'index'])->name('user.accessory.order');

    
    Route::get('/user/product/order',[ProductOrderController::class,'index'])->name('user.product.order');
    
    
});









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
Route::get('/accessories/edit/{id}',[EditAccessoriesController::class,'edit'])->name('accessories.edit');
Route::post('/accessories/update',[EditAccessoriesController::class,'update'])->name('accessories.update');
Route::get('/accessories/destroy/{id}',[EditAccessoriesController::class,'destroy'])->name('accessories.destroy');


Route::get('/customer/list',[ManageCustommerController::class,'index'])->name('customer.list');


});