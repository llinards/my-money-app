<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class UpdateSalary extends Component
{
    public string $date = '';
    public float $amount;

    public function mount(): void
    {
        $salary = auth()->user()->salaries()->lastSalary();
        if ($salary->exists()) {
            $this->date = date('Y-m-d', strtotime($salary->date));
            $this->amount = $salary->amount;
        }
    }

    public function updateSalary(): void
    {
        $user = auth()->user();

        $this->validate([
//            TODO: fix validation for amount
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $lastSalary = $user->salaries()->lastSalary();

//        TODO: Update this logic
        if ($lastSalary->exists()) {
            $user->salaries()->lastSalary()->update([
                'date' => $this->date,
                'amount' => $this->amount,
            ]);
            session()->flash('success', Lang::get('Salary updated!'));
        } else {
            $user->salaries()->create([
                'date' => $this->date,
                'amount' => $this->amount,
            ]);
            session()->flash('success', Lang::get('Salary created!'));
        }
        $this->redirect(route('dashboard'), navigate: true);
    }

    public function render()
    {
        return view('livewire.update-salary')->title(Lang::get('Update Salary'))->layout('layouts.app');
    }
}
