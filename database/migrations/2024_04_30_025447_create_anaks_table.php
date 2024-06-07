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
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); 
            $table->string('nik');
            $table->string('kk');
            $table->date('birth_date');
            $table->string('kelamin');
            $table->string('agama');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rtrw');
            $table->string('alamat');
            $table->string('ktp');
            $table->string('ppks');
            $table->string('kategori');
            $table->string('kasus');
            $table->string('kebutuhan');
            $table->string('hidup_layak');
            $table->string('perawatan');
            $table->string('dukungan_keluarga');
            $table->string('terapi');
            $table->string('pelatihan');
            $table->string('kewirausahaan');
            $table->string('aksesibilitas');
            $table->string('foto');
            $table->date('bantuan');
            $table->string('petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anaks');
    }
};
