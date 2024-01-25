<?php
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\ProjectsController;
use App\Http\Controllers\Customer\FavouriteController;
use App\Http\Controllers\Customer\PaymentController;


Route::prefix('customer')->name('customer.')->middleware(['auth:site_users','customer'])->group(function () {

    Route::get('/', [CustomerController::class, 'index']);

    Route::get('/designs', [CustomerController::class, 'designs'])->name('designs');

    Route::get('/profile', [CustomerController::class, 'profile'])->name('profile');

    Route::post('/updateprofile', [CustomerController::class, 'updateprofile'])->name('updateprofile');

    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');

    Route::get('/favourite', [FavouriteController::class, 'index'])->name('favourite');

    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

    Route::post('/storepayment', [PaymentController::class, 'store'])->name('storepayment');


    Route::get('addfav/{id}',  [FavouriteController::class, 'store'])->name('addfav');


});

Route::any('customer/paymenteturn/{id}/{customer}/{code?}', [PaymentController::class, 'return'])->name('paymenteturn');


