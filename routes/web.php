<?php

use App\Http\Controllers\BeauticianController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\CustomerController;
// use App\Http\Controllers\BookingController;
// use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;

// websites routes
Route::get('/',[FrontendHomeController::class,'home'])->name('home');
Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration',[CustomerController::class,'store'])->name('customer.store');






// all admin panel routes
Route::group(['prefix'=>'admin'],function(){

 Route::get('/login', [UserController::class, 'loginForm'])->name('admin.login');
 Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');

// Route::get('/',[HomeController::class,'home']);


Route::group(['middleware' => 'auth'], function () {
Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');

Route::get('/users',[UserController::class, 'list'])->name('users.list');
Route::get('/users/create',[UserController::class, 'createForm'])->name('users.create');

Route::post('/users/store',[UserController::class, 'store'])->name('users.store');

Route::get('/dashboard/list',[DashboardController::class,'list'])->name('dashboard.list');

Route::get('/beautician/list',[BeauticianController::class,'list']);
Route::get('/beautician/form',[BeauticianController::class,'createform'])->name('beautician.create');
Route::post('/beautician/store',[BeauticianController::class,'store'])->name('beautician.store');


Route::get('/service/list',[ServiceController::class,'list']);
Route::get('/service/form',[ServiceController::class,'createform'])->name('service.create');
Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');


Route::get('/category/list',[CategoryController::class,'list']);
Route::get('/category/form',[CategoryController::class,'createform'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

//  Route::get('/customer/list',[CustomerController::class,'list']);
//  Route::get('/customer/form',[CustomerController::class,'createform'])->name('customer.create');
//  Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
 
// Route::get('/booking/list',[BookingController::class,'list']);

// Route::get('/payment/list',[PaymentController::class,'list']);

Route::get('/report/list',[ReportController::class,'list']);

Route::get('/setting/list',[SettingController::class,'list']);
});
});
















