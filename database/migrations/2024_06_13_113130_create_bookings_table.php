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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('notelp');
            $table->date('tanggal');
            $table->integer('durasi');
            $table->string('tipe_kamar');
            $table->boolean('smoking_room')->default(false);
            $table->boolean('breakfast')->default(false);
            $table->decimal('harga_paket', 10, 2);
            $table->decimal('jumlah_tagihan', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
