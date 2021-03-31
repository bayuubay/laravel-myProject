<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class,'users']);
Route::get('/users/{user_id}',[UserController::class,'userDetails']);
Route::get('/users/name/{id}',[UserController::class,'userName']);
Route::post('/users/signup');

Route::get('/books',[BookController::class,'getBooks']);
Route::get('/book/{id}',[]);
Route::post('/book',[BookController::class,'createBook']);
Route::put('/book/{id}',[]);
Route::delete('/book/{id}',[]);