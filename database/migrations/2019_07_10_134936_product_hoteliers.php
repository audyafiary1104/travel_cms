<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductHoteliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_hoteliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hoteliers');
            $table->string('nama_hotels');
            $table->string('alamat_hotels');
            $table->string('jumlah_unit');
            $table->string('city');
            $table->string('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_hoteliers');
    }
}
