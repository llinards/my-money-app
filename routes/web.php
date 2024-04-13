<?php

use App\Livewire\UpdateAccount;
use App\Livewire\UpdateNextSalary;
use App\Livewire\UpdateSalary;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::get('salary/update', UpdateSalary::class)->name('salary.update');
    Route::get('salary/update/next', UpdateNextSalary::class)->name('salary.update.next');
    Route::get('account/update', UpdateAccount::class)->name('account.update');

    Route::view('profile', 'profile')
        ->name('profile');
});

require __DIR__.'/auth.php';
