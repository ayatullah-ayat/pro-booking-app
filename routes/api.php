<?php

use App\Http\Controllers\api\BookableAvailabilityController;
use App\Http\Controllers\api\BookableController;
use App\Http\Controllers\api\BookableReviewController;
use App\Models\Bookable;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('bookables', BookableController::class)->only(['index', 'show']);

Route::get('bookables/{bookable}/availability', BookableAvailabilityController::class)->name('bookables.availability.show');

Route::get('bookables/{bookable}/reviews', BookableReviewController::class)->name('bookables.reviews.index');