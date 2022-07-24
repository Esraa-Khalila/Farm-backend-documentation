<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\FarmShowController;
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
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('add', function () {
    return view('add-farm');
});
Route::get('Contact', function () {
    return view('contact');
});
Route::get('News', function () {
    return view('All-News');
});
Route::get('Posts', function () {
    return view('All-posts');
});
Route::get('farms', function () {
    return view('farm-list');
});
Route::get('farm-booking', function () {
    return view('Farm-booking');
});
Route::get('questions', function () {
    return view('faq');
});
Route::get('admin-dashboard', function () {
    return view('admin.admin-dashboard');
});
Route::get('admin-airlines', function () {
    return view('admin.admin-airlines');
});

Route::get('admin-farm', function () {
    return view('admin.admin-dashboard-Farm-agents');
});
Auth::routes();
Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/add', [App\Http\Controllers\FarmController::class,'store'])->name('add');
Route::get('/', [App\Http\Controllers\FarmController::class,'index']);
Route::get('/farms', [App\Http\Controllers\FarmShowController::class,'index']);
Route::get('farms/{id}', [App\Http\Controllers\FarmShowController::class,'show'])->name('single');
// Route::get('/farmsAdmin', [App\Http\Controllers\Admin\FarmController::class,'index']);
// Route::post('/farmsAdmin/{id}', [App\Http\Controllers\Admin\FarmController::class,'destroy'])->name('remove');
Route::resource('/farmsAdmin', App\Http\Controllers\Admin\FarmController::class);