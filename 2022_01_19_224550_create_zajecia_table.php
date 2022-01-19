<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZajeciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Zajecia', function (Blueprint $table) {
           $table->char('Id_zajec', 10);
	   $table->char('Id_przedmiotu', 2);
	   $table->char('Id_nauczyciela',11);
	   $table->dateTime('Data');
	   $table->primary('Id_zajec');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Zajecia');
    }
}