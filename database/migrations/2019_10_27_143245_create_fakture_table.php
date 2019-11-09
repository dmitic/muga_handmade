<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaktureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakture', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('narudzbenica_br');
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->bigInteger('zip');
            $table->string('city');
            $table->string('state');
            $table->text('napomena_user');
            $table->text('napomena_admin');  //nije vidljivo za korisnike
            $table->decimal('ukup_suma', 10,2)->nullable()->default(null);
            $table->timestamp('completed_at')->nullable();
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
        Schema::dropIfExists('fakture');
    }
}
