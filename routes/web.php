<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Tasks\TasksIndex;

# Rota para a página de tarefas
Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', TasksIndex::class)->name('tasks.index');
});

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
