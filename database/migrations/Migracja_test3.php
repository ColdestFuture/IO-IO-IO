<?php

use Illuminate\Support\Facades\DB;

DB::table('Oceny')->insert([
    'Id_uzytkownika' => '01123456789',
    'Ocena' => '1',
    'Przedmiot' => 'Polski',
]);

DB::table('Oceny')->insert([
    'Id_uzytkownika' => '01123456789',
    'Ocena' => '2',
    'Przedmiot' => 'Polski',
]);

DB::table('Oceny')->insert([
    'Id_uzytkownika' => '01123456789',
    'Ocena' => '3',
    'Przedmiot' => 'Polski',
]);

DB::table('Oceny')->insert([
    'Id_uzytkownika' => '01123456789',
    'Ocena' => '6',
    'Przedmiot' => 'Matematyka',
]);

DB::table('Oceny')->insert([
    'Id_uzytkownika' => '01123456789',
    'Ocena' => '5',
    'Przedmiot' => 'Matematyka',
]);

DB::table('Oceny')->insert([
    'Id_uzytkownika' => '01123456789',
    'Ocena' => '3',
    'Przedmiot' => 'Matematyka',
]);

DB::table('Oceny')->insert([
    'Id_uzytkownika' => '01123456789',
    'Ocena' => '3',
    'Przedmiot' => 'Angielski',
]);

?>
