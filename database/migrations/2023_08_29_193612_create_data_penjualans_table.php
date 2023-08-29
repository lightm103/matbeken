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
        Schema::create('data_penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->date('tanggal_transaksi');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('metode_pembayaran');
            $table->string('metode_pengambilan');
            $table->time('jam_pemotongan')->nullable();
            $table->date('tanggal_pemotongan')->nullable();
            $table->foreignId('data_barang_id')->constrained();
            $table->integer('quantity');
            $table->integer('total');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penjualans');
    }
};
