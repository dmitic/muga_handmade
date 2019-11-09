<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProizvodiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proizvodi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->string('tip_obuce');
            $table->text('materijali');
            $table->string('djon');
            $table->string('boja');
            $table->text('opis')->nullable();
            $table->enum('pol', ['Muške', 'Ženske', 'Uniseks']);
            $table->string('sezona');
            $table->text('napomena')->nullable();
            $table->decimal('cena', 9,2)->nullable()->default(null);
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
        Schema::dropIfExists('proizvodi');
    }
}
