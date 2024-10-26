<?php

use App\Http\Controllers\SocketController;
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

Route::post('recieve', [SocketController::class, 'receive'])->name('websocket_1')->middleware('throttle:10000,1');
Route::post('recieve-one', [SocketController::class, 'receive'])->name('websocket_2')->middleware('throttle:10000,1');
Route::post('recieve-two', [SocketController::class, 'receive'])->name('websocket_3')->middleware('throttle:10000,1');
Route::post('recieve-three', [SocketController::class, 'receive'])->name('websocket_4')->middleware('throttle:10000,1');
Route::post('recieve-four', [SocketController::class, 'receive'])->name('websocket_5')->middleware('throttle:10000,1');
