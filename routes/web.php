<?php

use App\Http\Controllers\BeauticianController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
 use App\Http\Controllers\BookingController;
// use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\Frontend\AboutController as FrontendAboutController;
use App\Http\Controllers\Frontend\BookingController as FrontendBookingController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;


// websites routes
Route::get('/',[FrontendHomeController::class,'home'])->name('home');
Route::get('/registration',[FrontendCustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration',[FrontendCustomerController::class,'store'])->name('customer.store');
Route::get('/login',[FrontendCustomerController::class,'login'])->name('customer.login');
Route::post('/login',[FrontendCustomerController::class,'doLogin'])->name('customer.do.login');

Route::get('/services',[FrontendServiceController::class,'service'])->name('Services');

Route::get('/about',[FrontendAboutController::class,'about'])->name('About');
Route::get('/book',[FrontendBookingController::class,'createBook'])->name('book.now');
Route::post('/store/book',[FrontendBookingController::class,'store'])->name('store.book');
Route::get('/contact',[FrontendContactController::class,'contact'])->name('contact');


Route::group(['middleware'=>'auth'],function(){
    
    Route::get('/profile',[FrontendCustomerController::class, 'profile'])->name('profile.view');
    Route::get('/Edit/{id}',[FrontendCustomerController::class, 'ProfileEdit'])->name('profile.edit');
    Route::put('/Update/{id}',[FrontendCustomerController::class, 'ProfileUpdate'])->name('profile.update');
   
    
    Route::get('/logout',[FrontendCustomerController::class, 'logout'])->name('customer.logout');
});






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

Route::get('/',[DashboardController::class,'list'])->name('dashboard.list');

Route::get('/beautician/list',[BeauticianController::class,'list'])->name('beautician.list');
Route::get('/beautician/form',[BeauticianController::class,'createform'])->name('beautician.create');
Route::post('/beautician/store',[BeauticianController::class,'store'])->name('beautician.store');
Route::get('/beautician/edit/{id}', [BeauticianController::class, 'edit'])->name('beautician.edit');
Route::put('/beautician/update/{id}', [BeauticianController::class, 'update'])->name('beautician.update');
Route::get('/beautician/delete/{id}', [BeauticianController::class, 'delete'])->name('beautician.delete');


Route::get('/service/list',[ServiceController::class,'list'])->name('service.list');
Route::get('/service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');
Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');

Route::get('/service/form',[ServiceController::class,'createform'])->name('service.create');
Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');


Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/form',[CategoryController::class,'createform'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

 Route::get('/customer/list',[CustomerController::class,'list'])->name('list');

 
Route::get('/booking/list',[BookingController::class,'list'])->name('book.list');
Route::get('/booking/view',[BookingController::class,'view'])->name('book.view');

// Route::get('/payment/list',[PaymentController::class,'list']);

Route::get('/report/list',[ReportController::class,'list']);

Route::get('/setting/list',[SettingController::class,'list']);
});
});

















