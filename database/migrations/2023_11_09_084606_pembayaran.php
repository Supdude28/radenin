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
        schema::create('pembayaran', function(Blueprint $table){
            $table->integer('id_pembayaran')->autoincremet();
            $table->integer('id_petugas');
            $table->string('nisn');
            $table->date('tanggal_bayar');
            $table->string('belum_dibayar',8);
            $table->string('bulan_dibayar',13);
            $table->string('tahun_dibayar',4);
            $table->integer('id_spp');
            $table->integer('jumlah_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::drop('pembayaran');
    }
};
