<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/seed', function (Request $request){
    $time = microtime(true);
    $id = uniqid();
    $time_again = str_split($id, 8);
    $sec = hexdec('0x' . $time_again[0]);
    $usec = hexdec('0x' . $time_again[1]);
    return response('seconds: ' . $sec . " Microseconds: " . $usec)
    ->withHeaders([
        'time' => $time,
        'uniqid' => uniqid(),
    ]);
});

