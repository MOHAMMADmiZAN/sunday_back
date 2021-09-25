<?php

use App\Http\Controllers\SundayController;
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
Route::post('insert', [SundayController::class, 'insert']);
Route::get('/waiting', [SundayController::class, "waiting"]);
Route::post('/waitingUp/{id}', [SundayController::class, "currentUpdate"]);
Route::get('/current', [SundayController::class, "current"]);
Route::post('/currentUp/{id}', [SundayController::class, "completeUpdate"]);
Route::get('/complete', [SundayController::class, "complete"]);
Route::get('/delete/{id}', [SundayController::class, "remove"]);
