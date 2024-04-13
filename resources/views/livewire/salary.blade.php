<div
    class="bg-white shadow-xl overflow-hidden rounded-lg w-full sm:w-1/4 flex justify-center sm:justify-start items-center">
    <div class="text-center sm:text-left p-6">
        @if($hasLastSalary)
            <h3 class="text-lg text-left text-gray-800">{{ __('Last salary date') }} - <span
                    class="font-semibold">{{$date}}</span>
            </h3>
            <h3 class="text-lg text-left text-gray-800">{{ __('Amount') }} - <span
                    class="font-semibold">{{$amount}} EUR</span>
            </h3>
        @else
            <h3 class="text-lg text-gray-800">{{ __('No info about your last salary') }}</h3>
        @endif
        <hr class="my-4">
        <x-primary-link wire:navigate href="{{route('salary.update')}}">
            {{ $hasLastSalary ? __('Update') : __('Create') }}
        </x-primary-link>
    </div>
</div>
