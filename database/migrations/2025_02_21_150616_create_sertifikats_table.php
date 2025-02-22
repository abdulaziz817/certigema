<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up()
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nama');
            $table->date('tanggal');
            $table->string('jenis_course'); // Opsi jenis kursus
            $table->text('materi')->nullable(); // Bisa kosong
            $table->integer('nilai')->unsigned(); // Nilai positif
            $table->text('keterangan')->nullable();
            $table->string('ttd_digital_1')->nullable();
            $table->string('ttd_digital_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Kembalikan perubahan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikats');
    }
};
