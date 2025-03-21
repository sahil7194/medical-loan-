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

    Route::get('home', 'show_home_page')->name('home');

    Route::get('signin','show_login_page');
    Route::post('signin','signin');

    Route::get('signup','show_signup_page');
    Route::post('signup','signup');

    Route::get('logout','logout');

    Route::get('forget-password','show_forget_password_page');
    Route::get('reset-password','show_reset_password_page');

});

Route::controller(CibilController::class)->group(function(){
    Route::get('cibil-check', 'show_cibil_check_page');
    Route::post('cibil-check', 'cibil_check');

    Route::view('cibil-result', 'cibil.result');

});

Route::controller(SchemeController::class) ->group(function (){

    Route::get('schemes-applicant','applicant_schemes')->middleware(['auth']);
    Route::get('schemes-applicant/{slug}','applicant_schemes_show')->middleware(['scheme']);
    Route::get('schemes-applicant/{slug}/apply','applicant_schemes_apply')->middleware(['auth']);

    Route::get('vendor-schemes/','vendor_schemes_list')->middleware(['auth']);

    Route::get('refer-scheme', 'show_refer_scheme_page')->middleware(['auth','referent']);
    Route::get('schemes','index')->middleware(['auth','referent']);
});

Route::resource('schemes', SchemeController::class);

Route::controller(ApplicationsController::class)->group(function(){
    Route::get('application-history','index')->middleware(['auth']);
    Route::get('reference-history','show_reference_history_page')->middleware(['auth','referent']);
    Route::get('referent-applicant','show_vendor_applicant_page')->middleware(['auth','vendor']);
});

Route::controller(PaymentController::class)->group(function(){
    Route::get('referent-payment-history','show_vendor_payment_history_page')->middleware(['auth','referent']);
});


Route::controller(CrmController::class)->group(function(){
    Route::get('crm-schemes','show_schemes_page');
    Route::get('crm-vendor','show_vendors_page');
    Route::get('crm-referent','show_referent_page');
    Route::get('crm-payment-history','show_payment_history_page');
    Route::get('crm-applicant','show_applicant_page');
})->middleware(['auth','staff']);

Route::middleware(['auth', 'staff'])->group(function () {
    Route::resource('blogs', BlogController::class)->except(['index', 'show']);
});

Route::resource('blogs', BlogController::class)->only(['index', 'show']);


Route::view('terms-conditions','other.terms-conditions');
Route::view('privacy-policy','other.privacy-policy');
