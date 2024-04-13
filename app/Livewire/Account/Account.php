<?php

namespace App\Livewire\Account;

use Carbon\Carbon;
use Livewire\Component;

class Account extends Component
{
    public float $balance;
    public string $date;
    public float $dailyLimit;
    public bool $hasAccount = false;
    public bool $isUpdated = false;

    public function mount(): void
    {
        $account = auth()->user()->account()->getAccount();
        if ($account->exists()) {
            $this->balance = $account->balance;
            $this->dailyLimit = $account->daily_limit;
            $this->date = date('d/m/Y', strtotime($account->updated_at));
            $this->hasAccount = true;
            $this->isUpdated = $this->setIsUpdated($account);
        }
    }

    public function render()
    {
        return view('livewire.account.account');
    }

    protected function setIsUpdated($account): bool
    {
        return Carbon::parse($account->updated_at)->isToday();
    }
}
