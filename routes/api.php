<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GachaController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    Route::prefix('user')->group(function () {
        Route::get('get', [UserController::class, 'show']);
        Route::post('update', [UserController::class, 'update']);
    });
    Route::get('/gacha/draw', [GachaController::class, 'draw']);
    Route::get('/character/list', [UserController::class, 'list']);
});

