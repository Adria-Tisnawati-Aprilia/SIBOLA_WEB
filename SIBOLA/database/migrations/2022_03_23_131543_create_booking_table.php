<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->string("kode_bookiwng")->primary();
            $table->date("tgl_booking");
            $table->date("tgl_main");
            $table->string("nama_arena");
            $table->string("kode_lapangan");
            $table->integer("id_users");
            $table->integer("no_jadwal");
            $table->double("dp");
            $table->string("status_dp");
            $table->string("bukti");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
