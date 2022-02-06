<?php

namespace Tests\Feature;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /** @test */
    public function test_login()
    {
        // Arrange
        // sprawdzenie logowania

        $credentialsFalse=array(
            'email' => 'user@gmail.com',
            'password' => 'P@$$w0rd');

        $credentialsTrue=array(
            'email' => 'tester@gmail.com',
            'password' => '654321');
        // Act
        // Wykonajmy zapytanie pod adres wpisu
        $response_1 =Auth::attempt($credentialsFalse);
        $response_2 =Auth::attempt($credentialsTrue);
        // Assert
        // Sprawdźmy że w odpowiedzi znajduje się tytuł wpisu

        $this->assertFalse($response_1);
        $this->assertTrue($response_2);
    }
}
