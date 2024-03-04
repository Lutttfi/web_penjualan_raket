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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->date('tanggal_pembelian');
            $table->integer('biaya');
            $table->integer('jumlah_pembelian');
            $table->unsignedBigInteger('id_pembeli');
            $table->unsignedBigInteger('id_petugas');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_pembeli')->references('id')->on('pembelis');
            $table->foreign('id_petugas')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
