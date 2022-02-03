<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_faktur');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->unsignedInteger('barang_id');
            $table->string('nama_penyewa');
            $table->string('tgl_pinjam');
            $table->string('tgl_kembali');
            $table->string('lama_sewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
