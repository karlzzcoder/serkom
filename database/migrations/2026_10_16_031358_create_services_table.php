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
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('code')->unique(); // misal: NET-01
        $table->string('title'); // nama layanan
        $table->string('category'); // e.g. Infrastructure, Dedicated, Support
        $table->text('description'); // deskripsi detail
        $table->string('specs')->nullable(); // e.g. Mikrotik / Ubiquiti / SLA 99.9%
        $table->string('image')->nullable(); // path foto/gambar
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
