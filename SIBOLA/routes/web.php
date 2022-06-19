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

Route::get("/data", function () {
    echo "ada";
});
Route::get('/coba', function () {
    return view("admin.layout.baground");
});

Route::group(["middleware" => "admin"], function () {
    Route::group(["middleware" => ["can:admin"]], function () {

        Route::prefix("admin")->group(function () {
            Route::get("/hak_akses/edit", [HakAksesController::class, "edit"]);
            Route::put("/hak_akses/simpan", [HakAksesController::class, "update"]);
            Route::resource("/hak_akses", HakAksesController::class);

            Route::get("/users/edit", [UsersController::class, "edit"]);
            Route::resource("/users", UsersController::class);
        });
    });
});


Route::prefix("owner")->group(function () {
    Route::get("/lapangan/edit_lapangan", [LapanganController::class, "edit_lapangan"]);
    Route::put("/lapangan/simpan", [LapanganController::class, "simpan_lapangan"]);
    Route::delete("/lapangan/{kode_lapangan}", [LapanganController::class, "destroy"]);
    Route::resource("/lapangan", LapanganController::class);

    Route::get("/arena/edit_arena", [ArenaController::class, "edit_arena"]);
    Route::put("/arena/simpan", [ArenaController::class, "simpan_arena"]);
    Route::delete("/arena/{kode_arena}", [ArenaController::class, "destroy"]);
    Route::resource("/arena", ArenaController::class);
    Route::resource("/booking", BookingController::class);
});

Route::get('/logout', [LoginController::class, "logout"]);

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function () {
    return view("/admin/home");
});

Route::get('/admin', function () {
    return view("/admin/layout/baground");
});

Route::get("/home", function () {
    return view("/admin/hak_akses");
});

Route::get("/home", function () {
    return view("/admin/home");
});

Route::get("/home", function () {
    return view("/admin/home");
});

Route::get("/login", [LoginController::class, "index"])->middleware("guest");

Route::post("/login", [LoginController::class, "post_login"]);

Route::get("/arena", [ArenaController::class, "index"]);

Route::get("/hak_akses", function () {
    return view("/admin/hak_akses/index");
});

Route::get("/users", function () {
    return view("/admin/users/users");
});

Route::get("/lapangan", function () {
    return view("/owner/lapangan/lapangan");
});

Route::get("/booking", function () {
    return view("/owner/booking/booking");
});
