<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\WechatController;
use App\Http\Controllers\Api\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::namespace('Api')
    ->name('api')
    ->middleware(['api.guard'])
    ->group(function (){
        Route::any('test', [TestController::class, 'test']);
        Route::prefix('user')->group(function () {
            // 用户列表
            Route::get('list', [UserController::class, 'index']);
        });

        // 微信公众号相关
        Route::prefix('wechat')->group(function () {
            Route::any('serve', [WechatController::class, 'serve']);
        });
    });
