<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorijeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategorije', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('proizvod_id');
            // $table->enum('sex', ['m', 'z', 'u']);
            // $table->string('sezona');

            // $table->foreign('proizvod_id')
            //         ->references('id')
            //         ->on('proizvodi')
            //         ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategorije');
    }
}
