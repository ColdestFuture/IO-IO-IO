<?php

use Illuminate\Support\Facades\DB;

DB::table('Uzytkownicy')->insert([
    'Id_uzytkownika' => '01123456789',
    'Id_dziecka' => NULL,
    'Imie' => 'Ania',
	'Drugie_imie' => NULL,
	'Nazwisko' => 'Ul',
	'Adres' => 'bleble',
	'Klasa' => '1a',
    'Email' => '123',
    'Telefon' => '123456789',
    'Rola' => 'U',
	'Haslo' => 'Pies1',
]);

DB::table('Uzytkownicy')->insert([
    'Id_uzytkownika' => '02123456789',
    'Id_dziecka' => NULL,
    'Imie' => 'Kasia',
	'Drugie_imie' => NULL,
	'Nazwisko' => 'Mak',
	'Adres' => 'bleble',
	'Klasa' => '1a',
    'Email' => '123',
    'Telefon' => '123456789',
    'Rola' => 'U',
	'Haslo' => 'Pies1',
]);

DB::table('Uzytkownicy')->insert([
    'Id_uzytkownika' => '03123456789',
    'Id_dziecka' => NULL,
    'Imie' => 'Zuzia',
	'Drugie_imie' => NULL,
	'Nazwisko' => 'Fusak',
	'Adres' => 'bleble',
	'Klasa' => '1b',
    'Email' => '123',
    'Telefon' => '123456789',
    'Rola' => 'U',
	'Haslo' => 'Pies1',
]);

DB::table('Uzytkownicy')->insert([
    'Id_uzytkownika' => '91123456789',
    'Id_dziecka' => NULL,
    'Imie' => 'Grażyna',
	'Drugie_imie' => NULL,
	'Nazwisko' => 'Groźna',
	'Adres' => 'bleble',
	'Klasa' => NULL,
    'Email' => '123',
    'Telefon' => '123456789',
    'Rola' => 'N',
	'Haslo' => 'Pies1',
]);

?>

