<?php

use App\Http\Controllers\PartController;
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
Route::get('parts', [PartController::class, 'index']);
Route::get('parts/{part_id}', [PartController::class, 'show']);
Route::put('parts/{part_id}', [PartController::class, 'update']);
Route::post('parts', [PartController::class, 'store']);
Route::delete('parts/{part_id}', [PartController::class, 'destroy']); 