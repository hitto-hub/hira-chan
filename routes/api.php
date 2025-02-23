<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| APIルート
|--------------------------------------------------------------------------
|
| ここでは，アプリケーションのAPIルートを登録することができます．
| これらのルートは，ミドルウェアグループ「api」を割り当てられたグループ内の
| RouteServiceProviderによってロードされます．API構築を楽しんでください
|
*/

Route::apiResource('/threadPrimaryCategory', \App\Http\Controllers\API\ThreadPrimaryCategoryController::class)->only(['index']);
Route::apiResource('/threadSecondaryCategory', \App\Http\Controllers\API\ThreadSecondaryCategoryController::class)->only(['index', 'show']);

Route::prefix('/hub')->name('hub.')->controller(\App\Http\Controllers\API\HubController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::post('/store', 'store')->name('store');
    });
});

Route::prefix('/post')->name('post.')->controller(\App\Http\Controllers\API\PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::post('/store', 'store')->name('store');
    });
});

Route::prefix('/like')->name('like.')->controller(\App\Http\Controllers\API\LikeController::class)->group(function () {
    Route::get('/', fn () => abort(404))->name('index');

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::post('/store', 'store')->name('store');
        Route::post('/destroy', 'destroy')->name('destroy');
    });
});

// 要認証
Route::middleware([
    'auth:sanctum',
    'verified'
])->group(function () {
    Route::get('/me', fn (Request $request) => $request->user())->name('user.current');
});
