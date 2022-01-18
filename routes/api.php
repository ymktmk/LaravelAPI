<?php

use App\Http\Controllers\UserController;
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

// ユーザアカウント認証情報作成
Route::post('user/create', [UserController::class, 'create']);

// ユーザ情報取得
Route::get('/user/{id}', [UserController::class, 'show']);

// ユーザ情報更新
Route::post('/user/{id}/update', [UserController::class, 'update']);


// ・/gacha/draw ガチャ実行API
// ・/character/list ユーザ所持キャラクター一覧取得API
// を実装してみましょう。
// ガチャ実行は指定した回数分キャラクターの排出抽選を行い、ユーザの所持キャラクター情報に保存をします。