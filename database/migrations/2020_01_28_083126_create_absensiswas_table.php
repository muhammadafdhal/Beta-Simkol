<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensiswas', function (Blueprint $table) {
            $table->bigIncrements('abs_id');
            $table->bigInteger('abs_sw_id');
            $table->integer('abs_sakit');
            $table->integer('abs_izin');
            $table->integer('abs_alpha');
            $table->string('abs_ket');
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
        Schema::dropIfExists('absensiswas');
    }
}
