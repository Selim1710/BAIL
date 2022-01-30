<?php

use App\Http\Controllers\Backend\HomeController as AdminController;
use App\Http\Controllers\Backend\AdminLoginController;
use App\Http\Controllers\Backend\EditAccessoriesController;
use App\Http\Controllers\Backend\EditProductController;
use App\Http\Controllers\Backend\EditStockController;
use App\Http\Controllers\Backend\ManageCustommerController;
use App\Http\Controllers\Backend\ManageOrderController;
use App\Http\Controllers\Frontend\ShowAccessoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShowProductController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\UsersController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index'])->name('website.index');

Route::group(['prefix' => 'website'], function () {

    Route::get('/user/login', [UsersController::class, 'index'])->name('users.login');
    Route::post('/user/do/login', [UsersController::class, 'doLogin'])->name('user.do.login');
    Route::get('/user/registration', [UsersController::class, 'create'])->name('users.registration.create');
    Route::post('/user/registration/store', [UsersController::class, 'store'])->name('users.registration.store');
    Route::get('/user/logout', [UsersController::class, 'logout'])->name('user.logout');


    Route::get('/user/profile', [UserProfileController::class, 'userProfile'])->name('user.profile');
    Route::get('/user/edit/profile/{id}', [UserProfileController::class, 'editProfile'])->name('user.edit.profile');
    Route::post('/user/update/profile/{id}', [UserProfileController::class, 'updateProfile'])->name('user.update.profile');
    Route::get('/user/upload/image/{id}', [UserProfileController::class, 'uploadImage'])->name('user.upload.image');

    Route::get('/user/show/product', [ShowProductController::class, 'index'])->name('user.show.product');
    Route::get('/view/product/details/{id}', [ShowProductController::class,'view'])->name('website.product.details');


    Route::group(['middleware'=>'web_auth'],function(){

        Route::get('/user/product/add/to/card/{id}',[ShowProductController::class,'addToCart'])->name('product.add.to.cart');
        Route::get('/user/product/delete/from/card/{id}',[ShowProductController::class,'deleteFromCart'])->name('product.cart.delete');
        Route::get('/user/product/clear/from/cart',[ShowProductController::class,'clearCart'])->name('product.clear.cart');
        Route::get('/user/product/checkout',[ShowProductController::class,'checkout'])->name('user.product.checkout');


        Route::get('/accessory/add/to/cart/{id}', [ShowAccessoryController::class, 'addToCart'])->name('accessory.add.to.cart');
        Route::post('/accessory/place/order/{id}', [ShowAccessoryController::class, 'accessoryOrder'])->name('accessory.place.order');


        Route::get('/user/product/order/{id}', [ShowProductController::class, 'orderForm'])->name('user.product.order');
        Route::post('/user/place/order/{id}', [ShowProductController::class, 'orderPlace'])->name('customer.place.order');

        Route::get('/user/accessory/order/{id}', [ShowAccessoryController::class, 'orderForm'])->name('user.accessory.order');

    });


    Route::get('/user/show/accessory', [ShowAccessoryController::class, 'index'])->name('user.show.accessories');
    Route::get('/user/view/accessory/details/{id}',[ShowAccessoryController::class,'view'])->name('website.accessory.details');


});




Route::group(['prefix' => 'admin'], function () {


    Route::get('/login', [AdminLoginController::class, 'loginForm'])->name('admin.login');
    Route::post('/do/login', [AdminLoginController::class, 'adminDoLogin'])->name('admin.do.login');
    Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');

    Route::group(['middleware' => ['auth','admin']], function () {

        Route::get('/', [AdminController::class, 'home'])->name('home');

        Route::get('/product', [EditProductController::class, 'index'])->name('product.index');
        Route::get('/product/create', [EditProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [EditProductController::class, 'store'])->name('product.store');
        Route::get('/product/view/{id}', [EditProductController::class, 'view'])->name('admin.view.product');
        Route::get('/product/edit/{id}', [EditProductController::class, 'edit'])->name('product.edit');
        Route::post('/product/update/{id}', [EditProductController::class, 'update'])->name('product.update');
        Route::get('/product/delete/{id}', [EditProductController::class, 'destroy'])->name('product.destroy');

        Route::get('/order', [ManageOrderController::class, 'index'])->name('order.index');
        Route::get('/confirm/order/{id}', [ManageOrderController::class, 'confirmOrder'])->name('admin.confirm.order');
        Route::get('/remove/order/{id}', [ManageOrderController::class, 'removeOrder'])->name('admin.remove.order');

        //stock
        Route::get('/stock', [EditStockController::class, 'index'])->name('stock.index');
        Route::get('/stock/create', [EditStockController::class, 'create'])->name('stock.create');
        Route::post('/stock/store', [EditStockController::class, 'store'])->name('stock.store');


        Route::get('/accessories', [EditAccessoriesController::class, 'index'])->name('accessories.index');
        Route::get('/accessories/create', [EditAccessoriesController::class, 'create'])->name('accessories.create');
        Route::post('/accessories/store', [EditAccessoriesController::class, 'store'])->name('accessories.store');
        Route::get('/accessories/view/{id}',[EditAccessoriesController::class,'view'])->name('admin.view.accessory');
        Route::get('/accessories/edit/{id}', [EditAccessoriesController::class, 'edit'])->name('accessories.edit');
        Route::post('/accessories/update', [EditAccessoriesController::class, 'update'])->name('accessories.update');
        Route::get('/accessories/destroy/{id}', [EditAccessoriesController::class, 'destroy'])->name('accessories.destroy');


        Route::get('/customer/list', [ManageCustommerController::class, 'index'])->name('customer.list');
    });
});
