<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\DecorationController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SslCommerzPaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/weeding-card',[WebsiteController::class,'weedingCard'])->name('weeding-card');
Route::get('/food',[WebsiteController::class,'food'])->name('food');
Route::get('/weeding-decoration',[WebsiteController::class,'weedingDecoration'])->name('weeding-decoration');
Route::get('/venue',[WebsiteController::class,'venue'])->name('venue');
Route::get('/photography',[WebsiteController::class,'photography'])->name('photography');
Route::get('/package',[WebsiteController::class,'package'])->name('package');
Route::get('/venue-detail/{id}',[WebsiteController::class,'venueDetail'])->name('venue-detail');
Route::get('/card-detail/{id}',[WebsiteController::class,'cardDetail'])->name('card-detail');
Route::get('/decoration-detail/{id}',[WebsiteController::class,'decorationDetail'])->name('decoration-detail');
Route::get('/photographer-detail/{id}',[WebsiteController::class,'photographerDetail'])->name('photographer-detail');
Route::get('/food-detail/{id}',[WebsiteController::class,'foodDetail'])->name('food-detail');
Route::get('/cart/add',[BookController::class,'index'])->name('cart.add');

//Cart Module
Route::get('/cart',[CartController::class,'index'])->name('cart');
Route::post('/cart/add',[CartController::class,'add'])->name('cart.add');
Route::get('/cart/delete/{rowId}',[CartController::class,'delete'])->name('cart.delete');

//End Cart Module

//Checkout
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::post('/new-order',[CheckoutController::class, 'newOrder'])->name('new-order');
Route::get('/complete-order',[CheckoutController::class, 'completeOrder'])->name('complete-order');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::get('/customer-logout',[CustomerAuthController::class,'logout'])->name('customer.logout');
Route::get('/customer-login',[CustomerAuthController::class,'index'])->name('customer.login');
Route::post('/customer-login',[CustomerAuthController::class,'login'])->name('customer.login');
Route::get('/customer-register',[CustomerAuthController::class,'register'])->name('customer.register');
Route::post('/customer-register',[CustomerAuthController::class,'newCustomer'])->name('customer.register');

Route::middleware(['customer'])->group(function(){
    Route::get('/customer-dashboard',[CustomerProfileController::class,'index'])->name('customer.dashboard');
    Route::get('/customer-profile',[CustomerProfileController::class,'profile'])->name('customer.profile');
    Route::get('/customer-booking',[CustomerProfileController::class,'booking'])->name('customer.booking');
    Route::get('/customer-booking-detail/{id}',[CustomerProfileController::class,'bookingDetail'])->name('customer.booking-detail');
    Route::get('/customer-payment',[CustomerProfileController::class,'payment'])->name('customer.payment');
    Route::get('/customer-change-password',[CustomerProfileController::class,'changePassword'])->name('customer.change-password');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/category/add', [CategoryController::class,'index'])->name('category.add');
    Route::get('/category/manage', [CategoryController::class,'manage'])->name('category.manage');

    Route::get('/photographer/add', [PhotographerController::class,'index'])->name('photographer.add');
    Route::post('/photographer/create', [PhotographerController::class,'create'])->name('photographer.create');
    Route::get('/photographer/manage', [PhotographerController::class,'manage'])->name('photographer.manage');
    Route::get('/photographer/edit/{id}', [PhotographerController::class,'edit'])->name('photographer.edit');
    Route::get('/photographer/delete/{id}', [PhotographerController::class,'delete'])->name('photographer.delete');
    Route::post('/photographer/update/{id}', [PhotographerController::class,'update'])->name('photographer.update');


    Route::get('/venue/add', [VenueController::class,'index'])->name('venue.add');
    Route::post('/venue/create', [VenueController::class,'create'])->name('venue.create');
    Route::get('/venue/manage', [VenueController::class,'manage'])->name('venue.manage');
    Route::get('/venue/edit/{id}', [VenueController::class,'edit'])->name('venue.edit');
    Route::get('/venue/delete/{id}', [VenueController::class,'delete'])->name('venue.delete');
    Route::post('/venue/update/{id}', [VenueController::class,'update'])->name('venue.update');



    Route::get('/decoration/add', [DecorationController::class,'index'])->name('decoration.add');
    Route::post('/decoration/create', [DecorationController::class,'create'])->name('decoration.create');
    Route::get('/decoration/manage', [DecorationController::class,'manage'])->name('decoration.manage');
    Route::get('/decoration/edit/{id}', [DecorationController::class,'edit'])->name('decoration.edit');
    Route::get('/decoration/delete/{id}', [DecorationController::class,'delete'])->name('decoration.delete');
    Route::post('/decoration/update/{id}', [DecorationController::class,'update'])->name('decoration.update');



    Route::get('/card/add', [CardController::class,'index'])->name('card.add');
    Route::post('/card/create', [CardController::class,'create'])->name('card.create');
    Route::get('/card/manage', [CardController::class,'manage'])->name('card.manage');
    Route::get('/card/edit/{id}', [CardController::class,'edit'])->name('card.edit');
    Route::get('/card/delete/{id}', [CardController::class,'delete'])->name('card.delete');
    Route::post('/card/update/{id}', [CardController::class,'update'])->name('card.update');

    Route::get('/food/add', [FoodController::class,'index'])->name('food.add');
    Route::post('/food/create', [FoodController::class,'create'])->name('food.create');
    Route::get('/food/manage', [FoodController::class,'manage'])->name('food.manage');
    Route::get('/food/edit/{id}', [FoodController::class,'edit'])->name('food.edit');
    Route::get('/food/delete/{id}', [FoodController::class,'delete'])->name('food.delete');
    Route::post('/food/update/{id}', [FoodController::class,'update'])->name('food.update');



    Route::get('/admin/all-booking', [AdminBookingController::class,'index'])->name('admin.all-booking');
    Route::get('/admin/booking-detail/{id}', [AdminBookingController::class,'detail'])->name('admin.booking-detail');
    Route::get('/admin/booking-edit/{id}', [AdminBookingController::class,'edit'])->name('admin.booking-edit');
    Route::post('/admin/booking-update/{id}', [AdminBookingController::class,'update'])->name('admin.update-booking');
    Route::get('/admin/booking-invoice/{id}', [AdminBookingController::class,'invoice'])->name('admin.booking-invoice');
    Route::get('/admin/download-booking-invoice/{id}', [AdminBookingController::class,'downloadInvoice'])->name('admin.download-booking-invoice');
    Route::get('/admin/booking-delete/{id}', [AdminBookingController::class,'delete'])->name('admin.booking-delete');


});
