<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStavkeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stavke', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fakture_id');
            $table->bigInteger('proizvod_id');
            $table->string('naziv_proizvoda');
            $table->string('boja');
            $table->decimal('gaziste', 3,1);
            $table->decimal('pojedinacna_cena', 9, 2);
            $table->bigInteger('kolicina');
            $table->decimal('ukupna_cena', 9,2);
            $table->timestamps();

            $table->foreign('fakture_id')
                ->references('id')
                ->on('fakture')
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
        Schema::dropIfExists('stavke');
    }
}
