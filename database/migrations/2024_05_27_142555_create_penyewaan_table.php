<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelanggan_id')->constrained('pelanggan');
            $table->foreignId('alat_id')->constrained('alat');
            $table->decimal('total_harga', 10, 2);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status', ['disewa', 'dikembalikan', 'dibatalkan']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyewaan');
    }
};
