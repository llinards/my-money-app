<div
    class="bg-white shadow-xl overflow-hidden rounded-lg mt-5 sm:mt-0 ml-0 sm:ml-5 w-full sm:w-1/4 flex justify-center sm:justify-start items-center">
    <div class="text-center sm:text-left p-6">
        @if($hasAccount)
            <h3 class="text-lg text-left text-gray-800">{{ __('Current balance') }} - <span
                    class="font-semibold">{{$balance}} EUR</span>
            </h3>
            <p class="text-xs {{$isUpdated ? 'bg-green-500' : 'bg-yellow-500'}} text-gray-800">{{ __('Updated') }} -
                <span
                    class="font-semibold">{{$date}}</span>
            </p>
            <h3 class="text-lg text-left text-gray-800">{{ __('Set daily limit') }} - <span
                    class="font-semibold">{{$dailyLimit}} EUR</span>
            </h3>
        @else
            <h3 class="text-lg text-gray-800">{{ __('No info about your balance') }}</h3>
        @endif
        <hr class="my-4">
        <x-primary-link wire:navigate href="{{route('account.update')}}">
            {{ $hasAccount ? __('Update') : __('Create') }}
        </x-primary-link>
    </div>
</div>
