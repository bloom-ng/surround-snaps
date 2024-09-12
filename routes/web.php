<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Models\Gallery;

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


Route::get('/', function () {
    return view('surround.surround');
});

Route::get('/gallery', function () {
    $galleries = Gallery::latest()->paginate(12);
    return view('surround.gallery', compact('galleries'));
});

Route::get('/faq', function () {
    return view('surround.faq');
});

Route::get('/contact', function () {
    return view('surround.contact');
});

Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::post('/booking/check-availability', [BookingController::class, 'checkAvailability'])->name('booking.checkAvailability');

Route::get('/payment', function () {
    return view('surround.payment');
});


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/payment/success/{booking}', [PaymentController::class, 'handlePaymentSuccess'])->name('payment.success');
Route::get('/payment/failure', [PaymentController::class, 'handlePaymentFailure'])->name('payment.failure');

Route::get('/thank-you', [PaymentController::class, 'thankYou'])->name('payment.thank-you');

Route::post('/square/webhooks', [PaymentController::class, 'handleWebhook']);

