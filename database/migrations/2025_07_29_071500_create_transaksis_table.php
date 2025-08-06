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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('transaksi_id');
            $table->date('tanggal_transaksi');

            //constrained harus ngoprek modelnya bari migrate
            $table->foreignId('karyawan_id')->constrained('karyawans', 'karyawan_id');
            $table->foreignId('barang_id')->constrained('barangs', 'barang_id');

            $table->integer('qty')->default(1);

            // Tambahkan precision dan scale untuk decimal
            $table->decimal('harga_barang');
            $table->decimal('jumlah_harga');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
