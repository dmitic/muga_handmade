<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slike', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proizvod_id');
            $table->string('slika');

            $table->foreign('proizvod_id')
                    ->references('id')
                    ->on('proizvodi')
                    ->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slike');
    }
}
