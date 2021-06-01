<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::get('/{id}', [PostController::class, 'find']);
    Route::post('/', [PostController::class, 'create']);
    Route::put('/', [PostController::class, 'update']);
    Route::delete('/{id}', [PostController::class, 'delete']);
});

Route::prefix('users')->group(function () {
    Route::patch('users/{id}', [UserController::class, 'patch']);
});
