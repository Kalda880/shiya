<?php

use App\Http\Controllers\Affliate\AffliateController;

Route::prefix('affiliate')->name('affiliate.')->middleware(['auth:site_users','affiliate'])->group(function () {

    Route::get('/', [AffliateController::class, 'index']);

    Route::get('/profile', [AffliateController::class, 'profile'])->name('profile');

    Route::post('/updateprofile', [AffliateController::class, 'updateprofile'])->name('updateprofile');


});
