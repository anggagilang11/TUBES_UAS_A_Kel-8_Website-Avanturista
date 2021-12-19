<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'login']);
Route::post('register', [\App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('forgot-password', [\App\Http\Controllers\API\AuthController::class, 'forgotPassword']);
Route::post('update-password', [\App\Http\Controllers\API\AuthController::class, 'updatePassword']);
Route::post('check-verification-code', [\App\Http\Controllers\API\AuthController::class, 'checkVerificationCode']);

Route::middleware(['auth.api'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('profile', [\App\Http\Controllers\API\UserController::class, 'profile']);
        Route::post('profile/update', [\App\Http\Controllers\API\UserController::class, 'update']);
    });
});
