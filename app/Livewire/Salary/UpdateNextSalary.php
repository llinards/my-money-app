<?php

namespace App\Livewire\Salary;

use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class UpdateNextSalary extends Component
{
    public string $date = '';
    public float $amount;

    public function mount(): void
    {
        $salary = auth()->user()->salaries()->nextSalary();
        if ($salary->exists()) {
            $this->date = date('Y-m-d', strtotime($salary->date));
            $this->amount = $salary->amount;
        }
    }

    public function updateNextSalary(): void
    {
        $user = auth()->user();

        $this->validate([
//            TODO: fix validation for amount
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $nextSalary = $user->salaries()->nextSalary();

//        TODO: Update this logic
        if ($nextSalary->exists()) {
            $user->salaries()->nextSalary()->update([
                'date' => $this->date,
                'amount' => $this->amount,
            ]);
            session()->flash('success', Lang::get('Next Salary updated!'));
        } else {
            $user->salaries()->create([
                'date' => $this->date,
                'amount' => $this->amount,
            ]);
            session()->flash('success', Lang::get('Next Salary created!'));
        }
        $this->redirect(route('dashboard'), navigate: true);
    }


    public function render()
    {
        return view('livewire.salary.update-next-salary')->title(Lang::get('Update Next Salary'))->layout('layouts.app');
    }
}
