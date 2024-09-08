<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

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

// Route::get('/', function () {
//     return view('wlcome');
// });

Route::get('/', function () {
    return view('surround.surround');
});

Route::get('/gallery', function () {
    return view('surround.gallery');
});

Route::get('/faq', function () {
    return view('surround.faq');
});

Route::get('/contact', function () {
    return view('surround.contact');
});

Route::get('/booking', [BookingController::class, 'index']);
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::post('/booking/check-availability', [BookingController::class, 'checkAvailability'])->name('booking.checkAvailability');

Route::get('/payment', function () {
    return view('surround.payment');
});
Route::get('/payment2', function () {
    return view('surround.payment2');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');




