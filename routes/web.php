<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CibilController;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SchemeController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function(){

    Route::get('','show_welcome_page');

    Route::get('home', 'show_home_page');

    Route::get('login','show_login_page');
    Route::get('signup','show_signup_page');
    Route::get('forget-password','show_forget_password_page');
    Route::get('reset-password','show_reset_password_page');

});

Route::controller(CibilController::class)->group(function(){
    Route::get('cibil-check', 'show_cibil_check_page');
});

Route::controller(SchemeController::class)->group(function (){

    Route::get('refer-scheme', 'show_refer_scheme_page');
    Route::get('schemes','index');
});

Route::controller(ApplicationsController::class)->group(function(){
    Route::get('application-history','index');
    Route::get('reference-history','show_reference_history_page');
    Route::get('vendor-applicant','show_vendor_applicant_page');
});

Route::controller(PaymentController::class)->group(function(){
    Route::get('vendor-payment-history','show_vendor_payment_history_page');
});


Route::controller(CrmController::class)->group(function(){
    Route::get('crm-schemes','show_schemes_page');
    Route::get('crm-vendor','show_vendors_page');
    Route::get('crm-referent','show_referent_page');
    Route::get('crm-payment-history','show_payment_history_page');
    Route::get('crm-applicant','show_applicant_page');
});

Route::resource('blogs', BlogController::class);
