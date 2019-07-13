<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_agent');
            $table->integer('id_type_room');
            $table->integer('jumlah_dibayar');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('price');
            $table->string('status')->default('paid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
