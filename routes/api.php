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

Route::middleware('auth:sanctum')->get('/user/get', [UserController::class, 'show']);

Route::middleware('auth:sanctum')->post('/user/update', [UserController::class, 'update']);

Route::middleware('auth:sanctum')->get('/gacha/draw', [GachaController::class, 'draw']);

Route::middleware('auth:sanctum')->get('/character/list', [UserController::class, 'list']);