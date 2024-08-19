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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->foreignId('supplier_id')->constrained('supplier');
            $table->string('kode_barang')->unique();
            $table->string('lokasi_barang');
            $table->integer('stok');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
