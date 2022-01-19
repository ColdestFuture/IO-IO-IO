<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObecnoscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Obecnosc', function (Blueprint $table) {
       	   $table->bigIncrements('Id_obecnosci');
	   $table->char('Id_zajec', 10);
	   $table->char('Id_ucznia',11);
	   $table->char('Id_nauczyciela',11);
	   $table->enum('Obecnosc', ['O', 'N', 'S', 'Z']);
	   $table->boolean('Usprawiedliwienie');
	   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Obecnosc');
    }
}