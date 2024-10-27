<?php

use App\Http\Controllers\BdRecieveController;
use App\Http\Controllers\SocketController;
use App\Http\Controllers\SSRecieveController;
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

Route::post('bd_recieve-one', [BdRecieveController::class, 'receive'])->name('websocket_bdevent_1')->middleware('throttle:10000,1');
Route::post('bd_recieve-two', [BdRecieveController::class, 'receive'])->name('websocket_bdevent_2')->middleware('throttle:10000,1');
Route::post('bd_recieve-three', [BdRecieveController::class, 'receive'])->name('websocket_bdevent_3')->middleware('throttle:10000,1');
Route::post('bd_recieve-four', [BdRecieveController::class, 'receive'])->name('websocket_bdevent_4')->middleware('throttle:10000,1');
Route::post('bd_recieve-five', [BdRecieveController::class, 'receive'])->name('websocket_bdevent_5')->middleware('throttle:10000,1');

Route::post('ss_recieve-one', [SSRecieveController::class, 'receive'])->name('websocket_ss_1')->middleware('throttle:10000,1');
Route::post('ss_recieve-two', [SSRecieveController::class, 'receive'])->name('websocket_ss_2')->middleware('throttle:10000,1');
Route::post('ss_recieve-three', [SSRecieveController::class, 'receive'])->name('websocket_ss_3')->middleware('throttle:10000,1');
Route::post('ss_recieve-four', [SSRecieveController::class, 'receive'])->name('websocket_ss_4')->middleware('throttle:10000,1');
Route::post('ss_recieve-five', [SSRecieveController::class, 'receive'])->name('websocket_ss_5')->middleware('throttle:10000,1');
