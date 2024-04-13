<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class UpdateNextSalary extends Component
{
    public string $date = '';
    public float $amount;
    public bool $hasSalary = false;

    public function mount(): void
    {
        $salary = auth()->user()->salaries()->nextSalary();
        if ($salary->exists()) {
            $this->date = date('Y-m-d', strtotime($salary->date));
            $this->amount = $salary->amount;
            $this->hasSalary = true;
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
//        TODO: Update this logic
        if ($this->hasSalary) {
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
        return view('livewire.update-next-salary')->title(Lang::get('Update Next Salary'))->layout('layouts.app');
    }
}
