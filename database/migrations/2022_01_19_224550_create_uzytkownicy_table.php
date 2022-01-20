<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUzytkownicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Uzytkownicy', function (Blueprint $table) {
            $table->char('Id_uzytkownika',11);
            $table->char('Id_dziecka',11)->nullable($value = true);
            $table->string('Imie',50);
            $table->string('Drugie_imie',50)->nullable($value = true);
            $table->string('Nazwisko',50);
            $table->text('Adres');
            $table->char('Klasa',2)->nullable($value = true);
            $table->string('Email',320);
            $table->char('Telefon',9);
            $table->enum('Rola',['N','W','U','O']);
	        $table->char('Haslo',255);
            $table->primary('Id_uzytkownika');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Uzytkownicy');
    }
}
