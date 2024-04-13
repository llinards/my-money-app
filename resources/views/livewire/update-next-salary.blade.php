<div class="py-12">
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="bg-white mx-auto overflow-hidden shadow-xl rounded-lg w-full sm:w-1/2">
            <div class="mx-auto p-6">
                <form wire:submit="updateNextSalary" class="space-y-6">
                    <div>
                        <x-input-label for="amount" :value="__('Amount')"/>
                        <x-text-input wire:model="amount" name="amount" type="text"
                                      class="mt-1 block w-full"
                                      required autocomplete="amount"/>
                        <x-input-error class="mt-2" :messages="$errors->get('amount')"/>
                    </div>
                    <div>
                        {{--                        TODO: Fix date format--}}
                        <x-input-label for="date" :value="__('Payment Date')"/>
                        <x-text-input wire:model="date" name="date" type="date"
                                      class="mt-1 block w-full"
                                      required autocomplete="date"/>
                        <x-input-error class="mt-2" :messages="$errors->get('date')"/>
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

