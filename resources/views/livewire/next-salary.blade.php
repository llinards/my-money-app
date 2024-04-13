<div
    class="bg-white shadow-xl overflow-hidden rounded-lg mt-5 sm:mt-0 ml-0 sm:ml-5 w-full sm:w-1/4 flex justify-center sm:justify-start items-center">
    <div class="text-center sm:text-left p-6">
        @if($hasNextSalary)
            <h3 class="text-lg text-left text-gray-800">{{ __('Next salary date') }} - <span
                    class="font-semibold">{{$date}}</span>
            </h3>
            <h3 class="text-lg text-left text-gray-800">{{ __('Days until salary') }} - <span
                    class="font-semibold">{{$daysUntilNextSalary}}</span>
            </h3>

            @if($daysBetweenSalaries !== 0)
                <h3 class="text-lg text-left text-gray-800">{{ __('Days between salaries') }} - <span
                        class="font-semibold">{{$daysBetweenSalaries}}</span>
                </h3>
            @endif
        @else
            <h3 class="text-lg text-gray-800">{{ __('No info about your next salary') }}</h3>
        @endif
        <hr class="my-4">
        <x-primary-link wire:navigate href="{{route('salary.update.next')}}">
            {{ $hasNextSalary ? __('Update') : __('Create') }}
        </x-primary-link>
    </div>
</div>
