<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;
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

// Home
Route::get('/rentals', [RentalController::class, 'index']);

// Query Rental data
Route::get('/{name?}/{bedroom?}/{bathroom?}/{storey?}/{garage?}/{startPrice?}/{endPrice?}', [RentalController::class, 'search']);
