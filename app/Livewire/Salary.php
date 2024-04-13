<?php

namespace App\Livewire;

use Livewire\Component;

class Salary extends Component
{
    public string $date = '';
    public float $amount = 0.00;
    public bool $hasLastSalary = false;

    public function mount(): void
    {
        $salary = auth()->user()->salaries()->lastSalary();
        if ($salary->exists()) {
            $this->date = date('d/m/Y', strtotime($salary->date));
            $this->amount = $salary->amount;
            $this->hasLastSalary = true;
        }
    }

    public function render()
    {
        return view('livewire.salary');
    }
}
