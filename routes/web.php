<?php

use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\Music\Categores\CategoresPage;
use App\Livewire\Pages\Music\MusicCreate;
use App\Livewire\Pages\Music\SinglePage;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomePage::class)->name('home');

Route::prefix('music')->name('music.')->group(function () {

    Route::get('/', HomePage::class)->name('home');

    Route::get('/create', MusicCreate::class)->name('create');

    Route::get('/show/{slug}', SinglePage::class)->name('show');

    Route::prefix('categores')->name('categores.')->group(function (){
        Route::get('/', CategoresPage::class)->name('categores');
        Route::get('/category/{category}', CategoresPage::class)->name('category');
    });
    
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
