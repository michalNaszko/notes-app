<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SignInController;

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


Route::get('/', [SignInController::class, 'show']);
Route::post('/', [SignInController::class, 'signIn']);

Route::get('/notes', function () {
    return view('notes');
})->middleware('auth');

Route::get('/signup', [SignUpController::class, 'show']);
Route::post('/signup', [SignUpController::class, 'signup']);

