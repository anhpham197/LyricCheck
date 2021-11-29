<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/res', [\App\Http\Controllers\HomeController::class, 'checkWord'])->name('result');
Route::get('/show/{id}', [\App\Http\Controllers\HomeController::class, 'showPost'])->name('showPost');
Route::post('/save', [\App\Http\Controllers\HomeController::class, 'savePost'])->middleware('cors')->name('savePost');
Route::get('/invalidWords', [\App\Http\Controllers\HomeController::class, 'showWord'])->name('showWord');
Route::delete('/deleteWord/{id}', [\App\Http\Controllers\HomeController::class, 'deleteWord'])->name('deleteWord');
Route::post('/addWord', [\App\Http\Controllers\HomeController::class, 'addWord'])->name('addWord');
Route::get('/showAllPosts', [\App\Http\Controllers\HomeController::class, 'showAllPosts'])->name('showAllPosts');
Route::delete('/deletePost/{id}', [\App\Http\Controllers\HomeController::class, 'deletePost'])->name('deletePost');
Route::get('/search', [\App\Http\Controllers\HomeController::class, 'searchPost'])->name('searchPost');

Route::get('/item', [\App\Http\Controllers\LiveSearchController::class, 'index']);
Route::get('/searchproduct', [\App\Http\Controllers\LiveSearchController::class, 'search']);