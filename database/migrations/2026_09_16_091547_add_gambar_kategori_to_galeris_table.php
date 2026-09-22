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
        Schema::table('galeris', function (Blueprint $table) {
            if (!Schema::hasColumn('galeris', 'judul')) {
                $table->string('judul')->after('id');
            }
            if (!Schema::hasColumn('galeris', 'gambar')) {
                $table->string('gambar')->after('judul');
            }
            if (!Schema::hasColumn('galeris', 'kategori')) {
                $table->string('kategori')->nullable()->after('gambar');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galeris', function (Blueprint $table) {
            $table->dropColumn(['judul', 'gambar', 'kategori']);
        });
    }
};