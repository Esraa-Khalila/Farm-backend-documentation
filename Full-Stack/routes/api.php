<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\UncosController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FarmShowController;
use App\Http\Controllers\BookingController;



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
Route::apiResource('/farm', FarmController::class);
Route::get('/new', [UncosController::class,'index']);
Route::get('/question', [QuestionController::class,'index']);
Route::post('/addQuestion', [QuestionController::class, 'store']);
Route::get('/activity', [ActivityController::class, 'index']);
Route::get('/feedback', [FeedbackController::class, 'index']);
Route::apiResource('/new', UncosController::class);
Route::post('/login', [UserController::class, 'log']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/farmAdmin', [FarmShowController::class, 'index']);
Route::post('/booking', [BookingController::class, 'store']);

