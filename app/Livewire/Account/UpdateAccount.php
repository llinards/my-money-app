<?php

namespace App\Livewire\Account;

use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class UpdateAccount extends Component
{
    public float $balance;
    public float $dailyLimit;

    public function mount(): void
    {
        $account = auth()->user()->account()->getAccount();
        if ($account->exists()) {
            $this->balance = $account->balance;
            $this->dailyLimit = $account->daily_limit;
        }
    }

    public function updateAccount(): void
    {
        $user = auth()->user();
        $this->validate([
            'balance' => 'required|numeric|min:0',
            'dailyLimit' => 'required|numeric|min:0',
        ]);

        $account = $user->account()->getAccount();

        if ($account->exists()) {
            $user->account()->getAccount()->update([
                'balance' => $this->balance,
                'daily_limit' => $this->dailyLimit,
            ]);
            session()->flash('success', Lang::get('Balance info updated!'));
        } else {
            $user->account()->create([
                'balance' => $this->balance,
                'daily_limit' => $this->dailyLimit,
            ]);
            session()->flash('success', Lang::get('Balance info created!'));
        }

        $this->redirect(route('dashboard'), navigate: true);
    }

    public function render()
    {
        return view('livewire.account.update-account')->title(Lang::get('Update Account'))->layout('layouts.app');
    }
}
