<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_kamars', function (Blueprint $table) {
            $table->increments('kode_booking');
            $table->integer('id_user');
            $table->integer('id_tipekamar');
            $table->string('tgl_awal');
            $table->string('tgl_akhir');
            $table->string('status');
            $table->integer('harga');
            $table->string('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_kamars');
    }
};
