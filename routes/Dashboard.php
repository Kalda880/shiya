<?php
use App\Http\Controllers\Dashboard\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\SubCategoryController;
use App\Http\Controllers\Dashboard\TagsController;
use App\Http\Controllers\Dashboard\SkillController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\SiteSettingsController;
use App\Http\Controllers\Dashboard\TicketController;
use App\Http\Controllers\Dashboard\CouponController;
use App\Http\Controllers\Dashboard\DesignerController;
use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\PaymentRequestsController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\AdminsController;
use App\Http\Controllers\Dashboard\AffiliateController;
use App\Http\Controllers\Dashboard\DesignController;
use App\Http\Controllers\Dashboard\PaymentController;

Route::get('dashboard/login', [LoginController::class, 'showlogin'])->name('dashboard.login');

Route::post('dashboard/login', [LoginController::class, 'login'])->name('dashboard.login');
Route::post('dashboard/logout', [LoginController::class, 'logout'])->name('dashboard.logout');


 Route::prefix('dashboard')->name('dashboard.')->middleware(['Dashboard'])->group(function () {

     Route::get('/', [DashboardController::class, 'index']);
     Route::get('/designer/payment-requests', [PaymentRequestsController::class, 'index'])->name('designer.payments');
     Route::get('/designer/payment-requests/waiting', [PaymentRequestsController::class, 'waiting'])->name('designer.payments.waiting');
     Route::get('/designer/payment-requests/approved', [PaymentRequestsController::class, 'approved'])->name('designer.payments.approved');
     Route::get('/designer/payment-requests/processing', [PaymentRequestsController::class, 'processing'])->name('designer.payments.processing');
     Route::get('/designer/payment-requests/declined', [PaymentRequestsController::class, 'declined'])->name('designer.payments.declined');
     Route::put('/designer/payment-requests/processing/{id}/do', [PaymentRequestsController::class, 'doProcessing'])->name('designer.payments.processing.do');
     Route::put('/designer/payment-requests/processing/{id}/undo', [PaymentRequestsController::class, 'undoProcessing'])->name('designer.payments.processing.undo');
     Route::put('/designer/payment-requests/approved/{id}/do', [PaymentRequestsController::class, 'doApproved'])->name('designer.payments.approved.do');
     Route::put('/designer/payment-requests/approved/{id}/undo', [PaymentRequestsController::class, 'undoApproved'])->name('designer.payments.approved.undo');
     Route::delete('/designer/payment-requests/declined/{id}/do', [PaymentRequestsController::class, 'doDeclined'])->name('designer.payments.declined.do');
     Route::delete('/designer/payment-requests/declined/{id}/undo', [PaymentRequestsController::class, 'undoDeclined'])->name('designer.payments.declined.undo');



     
     Route::resources([
                'category'  => CategoryController::class,
                'category'  => CategoryController::class,
                'tag'       => TagsController::class,
                'skill'     => SkillController::class,
                'coupon'    => CouponController::class,
                'ticket'    => TicketController::class,
                'designer'  => DesignerController::class,
                'customer'  => CustomerController::class,
                'roles'     => RoleController::class,
                'admins'    => AdminsController::class,
                'design'    => DesignController::class,
                'affiliate' => AffiliateController::class,
                'payment'   => PaymentController::class,
     ]);
     Route::get('designer/{id}/update-status',[DesignerController::class,'showFormUpdateStatus'])->name('designer.status.update');
     Route::put('designer/{id}/update-status',[DesignerController::class,'updateStatus'])->name('designer.status.update.post');
     Route::resource('category.sub-categories', SubCategoryController::class)->parameters([
        'category' => 'cat_id',
        'sub-categories' => 'id',
    ]);;
     Route::get('settings', [SiteSettingsController::class, 'index'])->name('site_settings');
     Route::post('settings', [SiteSettingsController::class, 'update'])->name('site_settings.update');
     Route::get('setting/index', [SettingController::class, 'index'])->name('settings');

     Route::PUT('setting/update/{id}', [SettingController::class, 'update'])->name('settings.update');

     Route::post('reply', [TicketController::class, 'reply'])->name('reply');


     // Profile

     Route::get('profile', [DashboardController::class, 'profile'])->name('profile');

     Route::get('contact', [DashboardController::class, 'contact'])->name('contact');

     Route::get('custom', [DashboardController::class, 'custom'])->name('custom');

     Route::get('createinvoice/{id}', [DashboardController::class, 'createinvoice'])->name('createinvoice');
     Route::post('newinvoice', [DashboardController::class, 'newinvoice'])->name('newinvoice');


     Route::post('profile-update', [DashboardController::class, 'update'])->name('profile-update');

     Route::post('password-update', [DashboardController::class, 'password'])->name('passwordupdate');



 });


