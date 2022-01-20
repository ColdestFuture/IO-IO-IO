<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcenyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Oceny', function (Blueprint $table) {
           $table->bigIncrements('Id_oceny');
	   $table->char('Id_ucznia',11);
	   $table->char('Id_nauczyciela',11);
	   $table->decimal('Ocena', $precision = 3, $scale = 2);
	   $table->decimal('Waga', $precision = 1, $scale = 0);
	   $table->dateTime('Data');
	   $table->char('Id_przedmiotu', 2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Oceny');
    }
}