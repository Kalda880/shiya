<?php

use App\Http\Controllers\Customer\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClickpayLaravelListener;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\AjaxController;
use App\Http\Controllers\Front\DesignController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Models\Customer;
use App\Models\SiteUser;
use App\Models\Design;
use App\Models\Payment;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/shya-{code}', [FrontController::class, 'indexCode'])->name('index.code');
Route::get('oauth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('oauth.google');
Route::get('oauth/google/register', [SocialAuthController::class, 'redirectToGoogleRegister'])->name('oauth.google.register');

Route::get('oauth/google/callback',[SocialAuthController::class,'handleGoogleCallback'])->name('google.callback');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('php-123',function(){
    return phpinfo();
});
Route::get('/test/query', [TestController::class, 'queryTest']);
Route::get('/test/session', [TestController::class, 'session']);
Route::get('/test/login', [TestController::class, 'login']);
Route::get('/test/send-sms', [TestController::class, 'sendSMS']);
Route::get('/test/tran-ref/{ref?}', [TestController::class, 'tranRef']);
Route::get('/test/void-pay/{ref?}', [TestController::class, 'voidPayment']);
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/payment-IPN', [ClickpayLaravelListener::class, 'paymentIPN'])->name('payment_ipn');

Route::get('/pricing', [FrontController::class, 'pricing'])->name('pricing');

Route::get('/template', [FrontController::class, 'template'])->name('template');
Route::get('/template/{id}/shya-{code}', [FrontController::class, 'templateCode'])->name('template.code');

Route::get('/busi', [FrontController::class, 'business'])->name('business');

Route::get('/busi1', [FrontController::class, 'business1'])->name('business1');

Route::get('/customrequst', [FrontController::class, 'custom'])->name('customrequst');

Route::post('/sendcustom', [FrontController::class, 'sendcustom'])->name('sendcustom');

Route::post('/sendcontact', [FrontController::class, 'sendcontact'])->name('sendcontact');

Route::post('/showdetails', [AjaxController::class, 'showdetails'])->name('showdetails');
Route::post('/register-designer',[RegisterController::class,'registerDesigner'])->name('designer.register');

Auth::routes();

Route::middleware(['auth:site_users','customer'])->group(function () {

    Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [FrontController::class, 'profile'])->name('profile');
    Route::get('/logout', [FrontController::class, 'logout'])->name('logout');

    Route::get('/design/buy/{id}', [DesignController::class, 'buy'])->name('design.buy');

});

Route::get('/home', [FrontController::class, 'index'])->name('home');

Route::post('search', [FrontController::class, 'search'])->name('search');
Route::middleware(['auth:site_users'])->group(function () {
    Route::post('change-role/{role}', [LoginController::class,'changeRole'])->name('change-role');
});
Route::post('/paymenteturn/{id}', [PaymentController::class, 'return'])->name('paymenteturn');

Route::get('/test', function () {

    $customer = SiteUser::where('is_customer',1)->first();

    $design = Design::first();

    $payment = Payment::first();

    return view('invoice', compact('customer', 'design', 'payment'));
});


Route::get('date', function () {

   dd(invoiceNumber());


})->name('date');

Route::get('/testss', function(){
    Mail::raw('Hello, welcome to Laravel!', function ($message) {
  $message
    ->to("a1999sem@gmail.com")
    ->subject("test");
});
});

Route::post('/forgot-password',[ForgotPasswordController::class,'sendLinkResetPassword'])->middleware('guest')->name('password.email');

Route::get("/passwordReset/{token}",[ResetPasswordController::class,'resetPasswordForm'])->name("password.reset.form");

Route::post("/passwordReset/submit",[ResetPasswordController::class,'resetPasswordSubmit'] )->name("password.reset.submit");
