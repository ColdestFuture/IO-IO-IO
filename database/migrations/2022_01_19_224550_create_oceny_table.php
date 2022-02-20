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
           $table->id('Id_oceny')->from(1000);
        $table->char('Id_uzytkownika', 11);
        $table->char('Ocena', 1);
        $table->enum('Przedmiot', ['Polski', 'Matematyka', 'Angielski']);

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
