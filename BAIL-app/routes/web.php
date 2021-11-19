<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ManageAdminController;
use App\Http\Controllers\Backend\EditController;
use App\Http\Controllers\Users\UsersController;
use Illuminate\Support\Facades\Route;

// User Interface

Route::get('/', [UsersController::class, 'home']);




// Admin panel

// Route::group(['prefix'=>'admin'], function(){
//     Route::get('/', [AdminController::class, 'home']);
//     Route::get('/manage_admin', [ManageAdminController::class,'admin']);

// });


Route::get('/admin', [AdminController::class, 'home'])->name('home');
Route::get('/ManageProduct', [ManageAdminController::class,'admin'])->name('manage_product');

//route for update and delete data

Route::get('/product',[EditController::class,'index'])->name('index');
Route::get('/product/create',[EditController::class,'create'])->name('create');
Route::post('/product/store', [EditController::class,'store'])->name('store');
Route::get('/product/{id}',[EditController::class,'destroy'])->name('destroy');