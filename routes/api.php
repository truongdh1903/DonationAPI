<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

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
Route::get('report', [ReportController::class, 'index']);
Route::get('total-donate', [ReportController::class, 'totalDonate']);
Route::post('report/create', [ReportController::class, 'store']);
Route::post('report/reset', [ReportController::class, 'truncate']);