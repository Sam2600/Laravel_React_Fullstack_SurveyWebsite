<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SurveyController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::post("logout", [AuthController::class, 'logout'])->name('logout');
    Route::apiResource('survey', SurveyController::class);
    Route::get("/me", [AuthController::class, 'me']);
});

Route::post("login", [AuthController::class, 'login'])->name("login");
Route::post("sign-up", [AuthController::class, 'signUp'])->name('sign-up');
