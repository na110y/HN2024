<?php

use App\Http\Controllers\User\UserController;
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

Route::prefix('info-user')->group(function () {
    Route::get('/get-list-user', [UserController::class, 'getListUser']);
    Route::post('/create-update', [UserController::class, 'postCreateOrEditBhytAvailableRegistrationPeriod']);
    Route::delete('/delete', [UserController::class, 'deleteBhytAvailableRegistrationPeriod']);
});