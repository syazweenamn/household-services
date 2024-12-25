<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    Auth\LoginController,
    BookingController,
    DashboardController,
    ServiceController,
    WorkerController,
};


Route::get('/', [LoginController::class, 'showLoginForm'])->name('/');

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::middleware(['customer'])->group(function(){
        Route::prefix('services')->controller(BookingController::class)->group(function(){
            Route::get('/services-category', 'services_category')->name('servicesCategory');
            Route::get('/service-list/{servicecategory}', 'service_list')->name('serviceList');
            Route::get('/worker-list/{servicecategory}/{service}/{date?}', 'worker_list')->name('workerList');
            Route::get('/booking-details/{servicecategory}/{service}/{worker}/{date}', 'booking_details')->name('bookingDetails');
            Route::post('/place-booking', 'place_booking')->name('placeBooking');
        });

        Route::get('/booking-list', [BookingController::class, 'booking_list'])->name('bookingList');
        Route::put('/rate-booking/{booking}', [BookingController::class, 'rate_booking'])->name('rateBooking');
    });

    // admin pages
    Route::middleware(['admin'])->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::resource('/services', ServiceController::class);
        Route::resource('/workers', WorkerController::class);
        Route::get('/bookings', [BookingController::class, 'index'])->name('booking.index');
    });
});
Route::get('/test', [App\Http\Controllers\TestController::class, 'test'])->name('test');
