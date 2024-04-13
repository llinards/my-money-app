<div class="py-12">
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="bg-white mx-auto overflow-hidden shadow-xl rounded-lg w-full sm:w-1/2">
            <div class="mx-auto p-6">
                <form wire:submit="updateAccount" class="space-y-6">
                    <div>
                        <x-input-label for="balance" :value="__('Balance')"/>
                        <x-text-input wire:model="balance" name="balance" type="text"
                                      class="mt-1 block w-full"
                                      required autocomplete="balance"/>
                        <x-input-error class="mt-2" :messages="$errors->get('balance')"/>
                    </div>
                    <div>
                        <x-input-label for="dailyLimit" :value="__('Daily Limit')"/>
                        <x-text-input wire:model="dailyLimit" name="dailyLimit" type="text"
                                      class="mt-1 block w-full"
                                      required autocomplete="dailyLimit"/>
                        <x-input-error class="mt-2" :messages="$errors->get('dailyLimit')"/>
                    </div>
                    <div class="flex items-center gap-4">
                        <x-primary-button>
                            {{ __('Save') }}
                            <div wire:loading>
                                <x-loading-spinner/>
                            </div>
                        </x-primary-button>
                        <x-secondary-button wire:navigate href="{{route('dashboard')}}">
                            {{ __('Back') }}
                        </x-secondary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

