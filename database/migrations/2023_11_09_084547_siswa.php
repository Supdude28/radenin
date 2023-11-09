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
        schema::create('siswa',function (blueprint $table){
            $table->string('nisn',13);
            $table->string('nis',10);
            $table->string('nama',36);
            $table->integer('id_kelas');
            $table->text('alamat');
            $table->string('no_telp',16);
            $table->integer('id_spp');
            $table->timestamps();
            $table->primary('nisn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::drop('siswa');
    }
};
