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
    Schema::create('struktur_panitia', function (Blueprint $table) {
        $table->id();
        $table->string('nama_kegiatan');
        $table->string('ketua_panitia');
        $table->string('sekretaris_1')->nullable();
        $table->string('sekretaris_2')->nullable();
        $table->string('bendahara_1')->nullable();
        $table->string('bendahara_2')->nullable();
        $table->text('sie_acara')->nullable();         // Simpan dalam format JSON atau teks
        $table->text('sie_humas')->nullable();
        $table->text('sie_medinfo')->nullable();
        $table->text('sie_perlengkapan')->nullable();
        $table->text('sie_konsumsi')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struktur_panitia');
    }
};
