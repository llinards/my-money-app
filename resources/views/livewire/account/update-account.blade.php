<x-update-form>
    <form wire:submit="updateAccount" class="space-y-6">
        <div>
            <x-input-label for="balance" :value="__('Balance')" />
            <x-text-input
                wire:model="balance"
                name="balance"
                type="text"
                class="mt-1 block w-full"
                required
                autocomplete="balance"
            />
            <x-input-error class="mt-2" :messages="$errors->get('balance')" />
        </div>
        <div>
            <x-input-label for="dailyLimit" :value="__('Daily Limit')" />
            <x-text-input
                wire:model="dailyLimit"
                name="dailyLimit"
                type="text"
                class="mt-1 block w-full"
                required
                autocomplete="dailyLimit"
            />
            <x-input-error class="mt-2" :messages="$errors->get('dailyLimit')" />
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
