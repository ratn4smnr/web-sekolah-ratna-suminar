<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('profils', function (Blueprint $table) {
            $table->string('nama_sekolah');
            $table->text('sambutan')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('profils', function (Blueprint $table) {
            $table->dropColumn([
                'nama_sekolah', 'sambutan', 'visi', 'misi',
                'alamat', 'telepon', 'email', 'logo',
            ]);
        });
    }
};