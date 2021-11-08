<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ManageAdminController;
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
Route::get('/managadmin', [ManageAdminController::class,'admin'])->name('manage_admin');
Route::get('/add/admin',[ManageAdminController::class,'add'])->name('add_admin');