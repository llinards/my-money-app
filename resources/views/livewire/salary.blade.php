<div class="bg-white overflow-hidden shadow-sm rounded-lg w-full sm:w-1/2 lg:w-1/3">
    <div class="mx-auto text-center p-6">
        @if($date)
            <h3 class="text-lg text-gray-800">Your last salary date - <span
                    class="font-semibold">{{$date}}</span>
            </h3>
            <h3 class="text-lg text-gray-800">Amount - <span class="font-semibold">{{$amount}} EUR</span></h3>
        @else
            <h3 class="text-lg text-gray-800">No info about your latest salary</h3>
        @endif
        <hr class="mt-2 mb-4">
        <x-primary-link wire:navigate href="{{route('salary.update')}}">
            {{ __('Update') }}
        </x-primary-link>
    </div>
</div>
