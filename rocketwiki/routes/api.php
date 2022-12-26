<?php

use App\Http\Controllers\RocketController;
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

/* GET multiple rockets */
Route::get('/rockets', [RocketController::class, "getAllRockets"]);
Route::get('/rockets/active/{active}', [RocketController::class, "getRocketsByActivity"]);
Route::get('/rockets/success/{min}/{max}', [RocketController::class, "getRocketsBetweenSuccessRates"]);
Route::get('/rockets/manufacturer/{id}', [RocketController::class, "getRocketsByManufacturerId"])/*->where('id', '[0-9]+')*/;
Route::get('/rockets/manufacturer/name/{name}', [RocketController::class, "getRocketsByManufacturerName"]);

/* GET one rocket */
Route::get('/rocket/{id}', [RocketController::class, "getRocketById"]);

/* POST make new rocket */
Route::post('/rocket/new', [RocketController::class, "addRocket"]);

Route::delete('/rocket/remove/{id}', [RocketController::class, "removeRocket"]);

/* GET requests for the manufacturer */
Route::get('/manufacturer/{id}', [RocketController::class, "getManufacturerById"])/*->where('naam', '^[A-Za-z]+$')*/;
Route::get('/manufacturer/name/{name}', [RocketController::class, "getManufacturerByName"])/*->where('naam', '^[A-Za-z]+$')*/;