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

        $credentials=array(
            'email' => 'user@gmail.com',
            'password' => 'P@$$w0rd');


        // Assert
        $this->assertTrue(Auth::attempt($credentials));
    }
}
