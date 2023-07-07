<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginApiController;

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

###################################################################################
#                             APIs SIN TOKEN
###################################################################################
Route::post('/login', [LoginApiController::class, 'login']);

###################################################################################
#                             APIs CON TOKEN
###################################################################################
Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('course', CourseController::class);
});





