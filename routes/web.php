<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get("/singup", [UserController::class, "showSingUp"])->name("showSingUp");
Route::post("/singup", [UserController::class, "addUser"])->name("singup");

Route::get("/login", [UserController::class, 'showLogin'])->name("ShowLoginForm");
