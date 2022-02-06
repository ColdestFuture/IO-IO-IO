<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventAddTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_add_event()
    {
        // Arrange
        // Dodajemy do bazy danych wpis

        $event = Event::create([
            'title' => 'test',
            'Data' => '2010-02-02 15:50'
          ]);

        // Act
        // Wykonujemy zapytanie pod adres wpisu

        $response = $this->DB::table('events')->where('id', '=', $event->id);

        // Assert
        // Sprawdzamy że w odpowiedzi znajduje się tytuł wpisu
        $response->assertStatus(300);
    }
}
