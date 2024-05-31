<div>
    @if ($hasAccount)
        <h3>
            {{ __('Current balance') }} -
            <span class="font-semibold">{{ $balance }} EUR</span>
        </h3>
        <p class="{{ $isUpdated ? 'bg-green-500' : 'bg-yellow-500' }} p-1 text-xs text-gray-800">
            {{ __('Updated') }} -
            <span class="font-semibold">{{ $date }}</span>
        </p>
        <h3>
            {{ __('Set daily limit') }} -
            <span class="font-semibold">{{ $dailyLimit }} EUR</span>
        </h3>
    @else
        <h3>{{ __('No info about your balance') }}</h3>
    @endif
    <hr class="my-4" />
    <x-primary-link wire:navigate href="{{route('account.update')}}">
        {{ $hasAccount ? __('Update') : __('Create') }}
    </x-primary-link>
</div>
