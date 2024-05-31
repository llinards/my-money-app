<x-update-form>
    <form wire:submit="updateSalary" class="space-y-6">
        <div>
            <x-input-label for="amount" :value="__('Amount')" />
            <x-text-input
                wire:model="amount"
                name="amount"
                type="text"
                class="mt-1 block w-full"
                required
                autocomplete="amount"
            />
            <x-input-error class="mt-2" :messages="$errors->get('amount')" />
        </div>
        <div>
            {{-- TODO: Fix date format --}}
            <x-input-label for="date" :value="__('Payment Date')" />
            <x-text-input
                wire:model="date"
                name="date"
                type="date"
                class="mt-1 block w-full"
                required
                autocomplete="date"
            />
            <x-input-error class="mt-2" :messages="$errors->get('date')" />
        </div>
        <div class="flex justify-between gap-4">
            <x-secondary-button wire:navigate href="{{route('dashboard')}}">
                {{ __('Back') }}
            </x-secondary-button>
            <x-primary-button>
                {{ __('Save') }}
                <div wire:loading>
                    <x-loading-spinner />
                </div>
            </x-primary-button>
        </div>
    </form>
</x-update-form>
