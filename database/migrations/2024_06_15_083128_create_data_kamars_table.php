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
        Schema::create('data_kamars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_kamar');
            $table->integer('id_tipekamar');
            $table->string('status');
            $table->integer('harga');
            $table->longText('foto_kamar');
            $table->string('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kamars');
    }
};
