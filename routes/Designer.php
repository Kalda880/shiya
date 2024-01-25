<?php
use App\Http\Controllers\Designer\DashboardController;
use App\Http\Controllers\Designer\TicketController;
use App\Http\Controllers\Designer\CouponController;
use App\Http\Controllers\Designer\FinanceController;
use App\Http\Controllers\Designer\DesignsController;
use App\Http\Controllers\Designer\DesignerPaymentController;

Route::prefix('designer')->name('designer.')->middleware(['auth:site_users','designer'])->group(function () {

  Route::get('/', [DashboardController::class, 'index']);

  // Profile

  Route::get('profile', [DashboardController::class, 'profile'])->name('profile');

  Route::get('profile/edit', [DashboardController::class, 'edit'])->name('profile.edit');

  Route::post('profile/update', [DashboardController::class, 'update'])->name('profile.update');
  Route::get('payments', [DesignerPaymentController::class, 'index'])->name('payments');
  Route::get('payments/create', [DesignerPaymentController::class, 'create'])->name('payments.create');
  Route::post('payments', [DesignerPaymentController::class, 'store'])->name('payments.store');
  Route::delete('payments/{id}/destroy', [DesignerPaymentController::class, 'destroy'])->name('payments.destroy');
 
  
    Route::resources([
        'tickets' => TicketController::class,
        'coupon'  => CouponController::class,
        'finance' => FinanceController::class,
        'designs' => DesignsController::class,
    ]);

});
