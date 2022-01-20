<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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

// 新規登録
Route::post('/register', [AuthController::class, 'register']);
// ログイン
Route::post('/login', [AuthController::class, 'login']);

// ユーザー情報
Route::middleware('auth:sanctum')->get('/user/get', [UserController::class, 'show']);

// ユーザー情報更新
Route::middleware('auth:sanctum')->post('/user/update', [UserController::class, 'update']);