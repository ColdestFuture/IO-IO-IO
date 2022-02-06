<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EventController;


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

Route::get('kalendarz', [EventController::class, 'index'])->name('kalendarz');
Route::get('addEvent', [EventController::class, 'addEvent'])->name('addEvent');
Route::post('custom-add', [EventController::class, 'customAddEvent'])->name('event.add.custom'); 
Route::post('editEvent', [EventController::class, 'editEvent'])->name('editEvent');
Route::post('custom-edit', [EventController::class, 'customEditEvent'])->name('event.edit.custom');
Route::post('custom-delete', [EventController::class, 'customDeleteEvent'])->name('event.delete.custom');  


Route::get('plan', function () {
    
    return view('plan_lekcji');
})->name('plan');

Route::get('test', function () {
    
    return view('test');
})->name('test');