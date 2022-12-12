<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisterStepController;
use App\Http\Controllers\Backend\WelcomeController;
use App\Http\Controllers\Backend\ContractAssetController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\ClientContractAssetController;
use App\Http\Controllers\Backend\ClientReportController;
use App\Http\Controllers\Backend\ClientAccountController;
use App\Http\Controllers\Backend\ClientSupportController;
use App\Http\Controllers\Backend\PartnerCommissionController;
use App\Http\Controllers\Backend\ClientPaymentController;
use App\Http\Controllers\Backend\MarketingMaterialController;
use App\Http\Controllers\Backend\AdvisoryController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'welcome']);

Route::middleware('auth')->group(function () {

    Route::get('dashboard', [WelcomeController::class, 'index'])->name('dashboard');
    Route::get('dashboard-metas', [WelcomeController::class, 'dashboardMetas']);

    Route::get('client-board', [WelcomeController::class, 'clientIndex']);

    Route::resource('contract-assets', ContractAssetController::class);
    Route::resource('client-contract-assets', ClientContractAssetController::class);
    Route::resource('client-reports', ClientReportController::class);
    Route::resource('account', ClientAccountController::class);
    Route::resource('support', ClientSupportController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('partner-commissions', PartnerCommissionController::class);
    Route::resource('client-payments', ClientPaymentController::class);
    Route::resource('marketing-materials', MarketingMaterialController::class);
    Route::resource('advisories', AdvisoryController::class);

});

Route::resource('register-steps', RegisterStepController::class);
Route::get('init-verify-email/{code}', [RegisterStepController::class, 'initVerifyEmail']);
Route::resource('register', RegisterController::class);

Route::get('forgot-password', [LoginController::class, 'forgotPassword']);
Route::get('stripe-success', [PublicController::class, 'stripeSuccess']);
Route::get('stripe-cancel', [PublicController::class, 'stripeCancel']);
Route::post('forgot-password', [LoginController::class, 'postForgotPassword']);
Route::get('reset-password/{code}/{id}', [LoginController::class, 'resetPassword']);
Route::post('reset-password', [LoginController::class, 'postResetPassword']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('cache-clear', function () {
    \Artisan::call('optimize:clear');
    \Artisan::call('permission:cache-reset');

    return redirect('/');
});


