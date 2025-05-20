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
        Schema::create('barangs', function (Blueprint $table) {
            $table->string('id_barang', 5)->primary();
            $table->string('nama_barang', 100);
            $table->unsignedBigInteger('jenis');
            $table->integer('stok_minimum');
            $table->integer('stok')->default(0);
            $table->unsignedBigInteger('satuan');
            $table->string('foto', 100)->nullable();
            $table->timestamps();
            $table->foreign('jenis')->references('id_jenis')->on('jenis')->onDelete('cascade');
            $table->foreign('satuan')->references('id_satuan')->on('satuans')->onDelete('cascade');
            
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
