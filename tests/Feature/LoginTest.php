<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
   /** @test */
    public function test_login_page()
    {
        // Arrange
        // sprawdzenie logowania
        $this->assertDirectoryExists('resources\views\auth');
        $this->assertFileExists('resources\views\auth\login.blade.php');
        $response = $this->get('/login');
        $this->assertIsObject($response);
        $response->assertStatus(200);
    }
    public function test_login()
        {

        //konto z fabryki/ dostępne po wykonaniu seeda
        $credentialsTrue=array(
            'email' => 'user@gmail.com',
            'password' => 'P@$$w0rd');

        $credentialsFalse=array(
            'email' => 'marcin@o2.pl',
            'password' => 'AlaMaKota');
    
        // Act
        // Wykonajmy zapytanie pod adres wpisu
        
        $response_1 =Auth::attempt($credentialsFalse);
        $response_2 =Auth::attempt($credentialsTrue);
        // Assert
        // Sprawdźmy że w odpowiedzi znajduje się tytuł wpisu
        
        $this->assertIsBool($response_1);
        $this->assertIsBool($response_2);
        $this->assertFalse($response_1);
        $this->assertTrue($response_2);
        
    }
}
