<?php

use App\Http\Controllers\ArenaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
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

Route::group(["middleware"=>"admin"], function() {
    Route::prefix("admin")->group(function() {
    Route::resource("/hak_akses", HakAksesController::class);
    Route::resource("/user", UsersController::class);
    Route::get('/logout', [LoginController::class, "logout"]);
    });
});


Route::prefix("owner")->group(function() {
    Route::resource("/lapangan", LapanganController::class);
    Route::resource("/arena", ArenaController::class);
    Route::resource("/booking", BookingController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view("/admin/layout/baground");
});

Route::get("/home", function() {
    return view("/admin/home");
});

Route::get("/home", function() {
    return view("/admin/hak_akses");
});

Route::get("/home", function() {
    return view("/admin/home");
});

Route::get("/home", function() {
    return view("/admin/home");
});

Route::get("/login", [LoginController::class, "index"])->middleware("guest");

Route::post("/login", [LoginController::class, "post_login"]);

Route::get("/arena", [ArenaController::class, "index"]);

Route::get("/hak_akses", function() {
    return view("/admin/hak_akses/index");
});

Route::get("/users", function() {
    return view("/admin/users/users");
});

Route::get("/lapangan", function() {
    return view("/admin/lapangan/lapangan");
});

Route::get("/booking", function() {
    return view("/admin/booking/booking");
});
