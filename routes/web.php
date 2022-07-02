<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Coupon\CouponController;
use App\Http\Controllers\Coupon\WebsiteController;
use App\Http\Controllers\Coupon\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/layouts', function () {
    return view('layouts.app');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::get('/adminlayouts', function () {
    return view('admin.layouts.app');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/website-coupons/{slug}', [App\Http\Controllers\PublicController::class, 'websiteCoupons'])->name('website.coupons');
Auth::routes(['verify' => true]);


Route::middleware(['auth', 'admin'])->group(function () {

	Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

	
	//website ROUTES
    Route::get('/website', [WebsiteController::class, 'index'])->name('admin.website');
    Route::post('/create/website', [WebsiteController::class, 'create'])->name('create.website');
    Route::post('/update/website/{website}', [WebsiteController::class, 'update'])->name('update.website');
    Route::get('/delete/website/{website}', [WebsiteController::class, 'delete'])->name('delete.website');
	
	//category ROUTES
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/create/category', [CategoryController::class, 'create'])->name('create.category');
    Route::post('/update/category/{category}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('/delete/category/{category}', [CategoryController::class, 'delete'])->name('delete.category');
    
    //COUPONS ROUTES
	Route::get('/list-coupon', [CouponController::class, 'index'])->name('index.coupon');
	Route::get('/create-coupon', [CouponController::class, 'create'])->name('create.coupon');
	Route::post('/store-coupon', [CouponController::class, 'store'])->name('store.coupon');
	Route::get('/edit-coupon/{coupon}', [CouponController::class, 'edit'])->name('edit.coupon');
	Route::post('/update-coupon/{coupon}', [CouponController::class, 'update'])->name('update.coupon');
	Route::get('/delete-coupon/{coupon}', [CouponController::class, 'delete'])->name('delete.coupon');
	Route::get('/active-coupon/{coupon}', [CouponController::class, 'active'])->name('active.coupon');
	Route::get('/deactive-coupon/{coupon}', [CouponController::class, 'deactive'])->name('deactive.coupon');
	Route::get('/deactive-coupon-list', [CouponController::class, 'deactiveList'])->name('deactive.coupon.list');


});