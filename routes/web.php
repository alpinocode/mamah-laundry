<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminOrder;
use App\Http\Controllers\AdminOrderCreate;
use App\Http\Controllers\HistoryUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderUser;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatingController;
use App\Http\Middleware\RolePermission;
use App\Http\Middleware\UserRolePermission;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homeView'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/dashboard', [RatingController::class, 'ratingView'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Permission
Route::middleware(['auth', RolePermission::class, 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'showAdmin'])->name('admin.home');
    Route::get('/admin/schedule', [AdminController::class, 'schedule'])->name('admin.schedule');
    Route::get('/admin/order', [AdminOrder::class, 'showOrder'])->name('admin.order');

    // Admin Create Order
    Route::get('/admin/createorder', [AdminOrderCreate::class, 'showOrderCreate'])->name('admin.createorder');
    Route::post('/admin/createorder', [AdminOrderCreate::class, 'ordercreate'])->name('admin.createorders');

    Route::patch('/admin/order/{order}', [AdminOrder::class, 'editSchedule'])->name('order.update');
});

Route::middleware('auth', 'verified', UserRolePermission::class )->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // order Buat user
    Route::get('/order', [OrderUser::class, 'orderView'])->name('order');
    // create order User
    Route::post('/order', [OrderUser::class, 'createOrder'])->name('orders');

    // route untuk histroy order
    Route::get('/historyOrder', [HistoryUserController::class, 'userHistroy'])->name('user.history');
    
    // 
    Route::post('/dashboard', [ratingController::class, 'createRating'])->name('comment');
    
    // Route untuk halaman edit rating
    Route::get('/dashboard/edit/{rating}', [ratingController::class, 'edit'])->name('edit');
    
    // Route untuk update rating
    Route::patch('/dashboard/update/{rating}', [ratingController::class, 'update'])->name('update');
    
    Route::delete('/dashboard/{rating}', [ratingController::class,'destroy'])->name('hapus');
});


require __DIR__.'/auth.php';
