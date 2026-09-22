<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('profilsekolah', function (Blueprint $table) {
            $table->string('nama_sekolah');
            $table->text('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('sejarah')->nullable();
            $table->string('logo')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('profilsekolah', function (Blueprint $table) {
            $table->dropColumn([
                'nama_sekolah', 'alamat', 'telepon', 'email',
                'visi', 'misi', 'sejarah', 'logo',
            ]);
        });
    }
};