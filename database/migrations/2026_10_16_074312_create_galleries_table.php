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
    Schema::create('galleries', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // Judul kegiatan / dokumentasi
        $table->string('category'); // e.g. Kabel Tray, Server Room, Fiber Optic
        $table->string('image'); // Path file foto
        $table->text('description')->nullable(); // Deskripsi singkat proyek/lokasi
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
