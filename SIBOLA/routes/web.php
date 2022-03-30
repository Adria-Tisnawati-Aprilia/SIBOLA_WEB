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

Route::get("/login", function() {
    return view("/login/login");
});

Route::get("/arena", function() {
    return view("/admin/arena/arena");
});

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