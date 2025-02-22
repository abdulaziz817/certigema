<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nama');
            $table->date('tanggal');
            $table->string('jenis_course'); // Option Course
            $table->text('materi');
            $table->integer('nilai');
            $table->text('keterangan')->nullable();
            $table->string('ttd_digital_1')->nullable();
            $table->string('ttd_digital_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikats');
    }
};
