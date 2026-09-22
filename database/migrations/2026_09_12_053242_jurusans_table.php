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
        Schema::table('jurusans', function (Blueprint $table) {
            $table->string('nama_jurusan');
            $table->string('singkatan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jurusans', function (Blueprint $table) {
            $table->dropColumn(['nama_jurusan', 'singkatan', 'deskripsi', 'gambar']);
        });
    }
};
