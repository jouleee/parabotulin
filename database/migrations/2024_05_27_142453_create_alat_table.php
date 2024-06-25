<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->text('deskripsi');
            $table->decimal('harga_sewa_per_hari', 10, 2);
            $table->enum('status', ['tersedia', 'tidak tersedia'])->default('tersedia');
            $table->foreignId('kategori_id')->constrained('kategori_alat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alat');
    }
};
