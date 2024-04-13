<?php

namespace App\Livewire;

use Livewire\Component;

class NextSalary extends Component
{
    public string $date = '';
    public float $amount = 0.00;
    public int $daysUntilNextSalary;
    public int $daysBetweenSalaries;
    public bool $hasNextSalary = false;

    public function mount(): void
    {
        $salary = auth()->user()->salaries()->nextSalary();
        if ($salary->exists()) {
            $this->date = date('d/m/Y', strtotime($salary->date));
            $this->amount = $salary->amount;
            $this->daysUntilNextSalary = $salary->getDaysUntilNextSalary();
            $this->daysBetweenSalaries = $salary->getDaysBetweenSalaries();
            $this->hasNextSalary = true;
        }
    }

    public function render()
    {
        return view('livewire.next-salary');
    }
}
