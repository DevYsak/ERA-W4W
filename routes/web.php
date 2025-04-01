<?php
use App\Http\Controllers\HelloController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [HelloController::class, 'index']);
Route::get('/about', [HelloController::class, 'about']);
Route::get('/user', [UserController::class, 'index']);
