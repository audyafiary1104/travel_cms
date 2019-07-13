<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiBalance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_balance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_agent');
            $table->integer('jumlah_balance');
            $table->integer('jumlah_ditf');
            $table->integer('pajak');
            $table->integer('biaya_admin');
            $table->boolean('confirmasi')->default(false);
            $table->string('bukti_tf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
