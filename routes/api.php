<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register']);
    // Route::post('forgotpassword', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    // Route::get('resetpassword', [ForgotPasswordController::class, 'sendResetLink'])->name('password.reset');
    //  Route::get('/password/reset', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
    //Route::post('/password/reset', 'ResetPasswordController@reset');
    //  Route::post('/resetpassword/{token}', 'ResetPasswordController@reset');
    // Route::post('/resetpassword', [ResetPasswordController::class, 'reset']);
});
Route::apiResource('profile', ProfileController::class)->middleware('auth');;
Route::apiResource('offer', OfferController::class);
Route::post('submitOffer', [OfferController::class, 'submitOffer']);
