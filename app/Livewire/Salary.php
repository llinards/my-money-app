<?php

namespace App\Livewire;

use Livewire\Component;

class Salary extends Component
{
    public string $date = '';
    public float $amount = 0.00;

    public function mount(): void
    {
        $salary = auth()->user()->salaries()->latestSalary();
        if ($salary->exists()) {
            $this->date = date('Y-m-d', strtotime($salary->date));
            $this->amount = $salary->amount;
        }
    }

    public function render()
    {
        return view('livewire.salary');
    }
}
