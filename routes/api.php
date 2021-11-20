<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecruitmentController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\EntryController;

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

Route::group(['middleware' => ['api']], function(){

    Route::get('recruitments/dashboard', [RecruitmentController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('recruitments.dashboard');

    Route::apiResource('recruitments', RecruitmentController::class)
        ->middleware('auth:sanctum');
    
    Route::apiResource('recruitments.entries', EntryController::class)
        ->only(['store', 'destroy'])
        ->middleware('auth:sanctum');
    
    
});

// ユーザー登録
Route::post('/register', [RegisterController::class, 'register']);

// ログイン
Route::post('/login', [LoginController::class, 'login']);
