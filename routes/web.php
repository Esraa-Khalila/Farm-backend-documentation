<?php

use Illuminate\Support\Facades\Route;

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
Route::get('farm-single', function () {
    return view('Farm-single');
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
