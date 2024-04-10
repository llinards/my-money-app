<?php

namespace App\Livewire;

use Livewire\Component;

class UpdateSalary extends Component
{
    public string $date = '';
    public float $amount = 0;
    public bool $hasSalary = false;

    public function mount(): void
    {
        $salary = auth()->user()->salaries()->latestSalary();
        if ($salary->exists()) {
            $this->date = date('Y-m-d', strtotime($salary->date));
            $this->amount = $salary->amount;
            $this->hasSalary = true;
        }
    }

    public function updateSalary(): void
    {
        $user = auth()->user();

        $this->validate([
            'amount' => ['required', 'numeric'],
            'date' => 'required|date',
        ]);

        if ($this->hasSalary) {
            $user->salaries()->latestSalary()->update([
                'date' => $this->date,
                'amount' => $this->amount,
            ]);
            session()->flash('success', 'Updated salary successfully!');
        } else {
            $user->salaries()->create([
                'date' => $this->date,
                'amount' => $this->amount,
            ]);
            session()->flash('success', 'Added salary successfully!');
        }
        $this->redirect(route('dashboard'), navigate: true);
    }

    public function render()
    {
        return view('livewire.update-salary')->title('Update Salary')->layout('layouts.app');
    }
}
