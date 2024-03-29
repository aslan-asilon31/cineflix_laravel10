<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

// use App\Http\Livewire\Welcome\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::view('/', 'welcome');

// Route::livewire('/', 'welcome.index');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/landing-product-search', [WelcomeController::class, 'search_by_genres'])->name('search_by_genres');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
