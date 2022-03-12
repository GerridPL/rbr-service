<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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
    return view('home');
});

Route::name('service.')->prefix('service')->group(function () {
    Route::get('getComments', [ServiceController::class, 'getComments'])
        ->name('getComments');
    Route::get('getPosts', [ServiceController::class, 'getPosts'])
        ->name('getPosts');
    Route::get('addRandomPost', [ServiceController::class, 'addRandomPost'])
        ->name('addRandomPost');
    Route::get('addCommentYes', [ServiceController::class, 'addCommentYes'])
        ->name('addCommentYes');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
