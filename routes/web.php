<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Note;

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
    return view('notes', ['msg' => Note::where('user_id', Auth::id())->get()]);
})->middleware('auth');

Route::post('/notes', [NoteController::class, 'create']);
Route::delete('/notes', [NoteController::class, 'delete']);

Route::get('/signup', [SignUpController::class, 'show']);
Route::post('/signup', [SignUpController::class, 'signup']);

Route::get('/logout', function (Request $request) {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
});

