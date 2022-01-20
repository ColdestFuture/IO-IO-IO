<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('kalendarz', function () {
    
    return view('calendar');
})->name('kalendarz');

Route::get('plan', function () {
    
    return view('plan_lekcji');
})->name('plan');