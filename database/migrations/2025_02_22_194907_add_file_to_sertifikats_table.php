<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('sertifikats', function (Blueprint $table) {
            $table->string('file')->nullable()->after('nilai'); // Menyimpan nama file sertifikat
        });
    }

    public function down()
    {
        Schema::table('sertifikats', function (Blueprint $table) {
            $table->dropColumn('file');
        });
    }
};
