<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ArenaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasArenaController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\JenisLapanganController;
use App\Http\Controllers\KategoriLapanganController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PetugasOwnerController;
use App\Http\Controllers\PembayaranController;
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

Route::get('/coba', function () {
    return view("admin.layout.baground");
});

Route::group(["middleware" => "admin"], function () {
    Route::group(["middleware" => ["can:admin"]], function () {

        Route::prefix("admin")->group(function () {
            Route::get("/hak_akses/edit", [HakAksesController::class, "edit"]);
            Route::put("/hak_akses/simpan", [HakAksesController::class, "update"]);
            Route::resource("/hak_akses", HakAksesController::class);
            Route::get("/owner/edit", [OwnerController::class, "edit"]);
            Route::put("/owner/simpan", [OwnerController::class, "update"]);
            Route::resource("/owner", OwnerController::class);
            Route::get("/users/edit", [UsersController::class, "edit"]);
            Route::resource("/users", UsersController::class);
        });
    });

    Route::prefix("owner")->group(function () {

        // Data Kategori Lapangan
        Route::get("/kategori_lapangan/edit", [KategoriLapanganController::class, "edit"]);
        Route::put("/kategori_lapangan/simpan", [KategoriLapanganController::class, "update"]);
        Route::resource("/kategori_lapangan", KategoriLapanganController::class);

        // Data Jenis Lapangan
        Route::get("/jenis_lapangan/edit", [JenisLapanganController::class, "edit"]);
        Route::put("/jenis_lapangan/simpan", [JenisLapanganController::class, "update"]);
        Route::resource("/jenis_lapangan", JenisLapanganController::class);

        // Data Fasilitas
        Route::get("/fasilitas/edit", [FasilitasController::class, "edit"]);
        Route::put("/fasilitas/simpan", [FasilitasController::class, "update"]);
        Route::resource("fasilitas", FasilitasController::class);

        // Data Petugas Owner
        Route::get("/petugas_owner/edit", [PetugasOwnerController::class, "edit"]);
        Route::put("/petugas_owner/simpan", [PetugasOwnerController::class, "update"]);
        Route::resource("petugas_owner", PetugasOwnerController::class);

        Route::get("/fasilitas_arena/edit", [FasilitasArenaController::class, "edit"]);
        Route::put("/fasilitas_arena/simpan", [FasilitasArenaController::class, "update"]);
        Route::resource("fasilitas_arena", FasilitasArenaController::class);

        Route::get("/lapangan/edit_lapangan", [LapanganController::class, "edit_lapangan"]);
        Route::put("/lapangan/simpan", [LapanganController::class, "simpan_lapangan"]);
        Route::delete("/lapangan/{kode_lapangan}", [LapanganController::class, "destroy"]);
        Route::resource("/lapangan", LapanganController::class);

        Route::get("/arena/edit_arena", [ArenaController::class, "edit_arena"]);
        Route::put("/arena/simpan", [ArenaController::class, "simpan_arena"]);
        Route::delete("/arena/{kode_arena}", [ArenaController::class, "destroy"]);
        Route::resource("/arena", ArenaController::class);

        Route::get("/booking/edit", [BookingController::class, "edit"]);
        Route::put("/booking/simpan", [BookingController::class, "simpan"]);
        Route::resource("/booking", BookingController::class);

        Route::get("/pembayaran/edit", [PembayaranController::class, "edit"]);
        Route::put("/pembayaran/simpan", [PembayaranController::class, "simpan"]);
        Route::resource("/pembayaran", PembayaranController::class);
    });

    Route::get("/arena/edit_arena", [ArenaController::class, "edit_arena"]);
    Route::put("/arena/simpan", [ArenaController::class, "update"]);
    Route::delete("/arena/{kode_arena}", [ArenaController::class, "destroy"]);
    Route::resource("/arena", ArenaController::class);
    Route::resource("/booking", BookingController::class);

    Route::prefix("admin")->group(function () {
        Route::get("/", [AppController::class, "index"]);
        Route::get("/home", [AppController::class, "home"]);
    });
});

Route::get('/logout', [LoginController::class, "logout"]);

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function () {
    return view("/admin/home");
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
