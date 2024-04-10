<?php

use App\Livewire\UpdateSalary;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');
    
    Route::get('salary/update', UpdateSalary::class)->name('salary.update');

    Route::view('profile', 'profile')
        ->name('profile');
});

require __DIR__.'/auth.php';
