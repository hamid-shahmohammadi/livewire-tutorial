<?php

use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskShow;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::get('tasks',TaskIndex::class)->name('tasks');
    Route::get('tasks/create',TaskCreate::class);
    Route::get('tasks/{task}',TaskShow::class)->name('tasks.show');
});    

require __DIR__.'/auth.php';
