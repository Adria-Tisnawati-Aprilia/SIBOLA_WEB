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
        Schema::create('arena', function (Blueprint $table) {
            $table->string("kode_arena")->primary();
            $table->string("nama_arena");
            $table->integer("id_owner");
            $table->integer("no_hp");
            $table->text("alamat");
            $table->text("deskripsi");
            $table->string("foto")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arena');
    }
};
