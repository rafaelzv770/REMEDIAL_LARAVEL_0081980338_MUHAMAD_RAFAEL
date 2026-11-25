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
        Schema::create('tb_kunjungan', function (Blueprint $table){
            $table->increments('id_kunjungan');
            $table->string('nama_pasien', 100);
            $table->string('id_kunjungan',20);
            $table->text('keluhan');
            $table->date('tgl_kunjungan');
            $table->enum('status',['menunggu','selesai'])->default('menunggu');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kunjungan');
    }
};
