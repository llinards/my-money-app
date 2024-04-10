<?php

namespace App\Livewire;

use Livewire\Component;

class Salary extends Component
{
    public string $date;
    public float $amount;

    public function mount(): void
    {
        $salary = auth()->user()->salaries()->latest()->first();
        $this->date = date('d/M/y', strtotime($salary->date));
        $this->amount = $salary->amount;
    }

    public function render()
    {
        return view('livewire.salary');
    }
}
