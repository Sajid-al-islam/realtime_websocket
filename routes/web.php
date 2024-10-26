<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventTriggerController;
use App\Events\MessageSent;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tigger', function () {
    $message = 'I am web trigger';
    event(new MessageSent($message));
    return response()->json(['status' => 'Message Sent!']);
});

Route::get('sendMessage', [EventTriggerController::class, 'sendMessage']);