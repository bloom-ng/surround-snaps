<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;

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

Route::get('/terms', function () {
    return view('surround.terms');
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

// ADMIN SECTION
// Auth::routes();

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    //Gallery Routes
    Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
    Route::get('/galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');
    Route::put('/galleries/{gallery}', [GalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('galleries.destroy');

    // User routes
    Route::get('/admins', [UserController::class, 'index']);
    Route::get('/admins/{id}/edit', [UserController::class, 'edit']);
    // Route::get('/admins/{id}', [UserController::class, 'show']);
    Route::put('/admins/{id}', [UserController::class, 'update']);
    Route::post('/admins', [UserController::class, 'store']);
    Route::get('/admins/create', [UserController::class, 'create']);
    Route::delete('/admins/{id}', [UserController::class, 'destroy']);

    Route::get('/admins/edit/me', [UserController::class, 'me']);

    //Contact Routes
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

    //Booking Routes
    Route::get('/bookings', [BookingController::class, 'indexAdmin'])->name('bookings.index');
    Route::get('/bookings/{booking}/view', [BookingController::class, 'view'])->name('bookings.view');
    Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');

    //Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
