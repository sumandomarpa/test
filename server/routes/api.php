<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

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

Route::get('borrow', [BorrowController::class, 'index']);
Route::get('borrow/{borrow}', [BorrowController::class, 'show']);
Route::post('borrow', [BorrowController::class, 'store']);
Route::put('borrow/{borrow}', [BorrowController::class, 'update']);