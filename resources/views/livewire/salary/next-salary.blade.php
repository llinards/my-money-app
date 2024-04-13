<div>
    @if($hasNextSalary)
        <h3>{{ __('Next salary date') }} - <span
                class="font-semibold">{{$date}}</span>
        </h3>
        <h3>{{ __('Days until salary') }} - <span
                class="font-semibold">{{$daysUntilNextSalary}}</span>
        </h3>

        @if($daysBetweenSalaries !== 0)
            <h3>{{ __('Days between salaries') }} - <span
                    class="font-semibold">{{$daysBetweenSalaries}}</span>
            </h3>
        @endif
    @else
        <h3>{{ __('No info about your next salary') }}</h3>
    @endif
    <hr class="my-4">
    <x-primary-link wire:navigate href="{{route('salary.update.next')}}">
        {{ $hasNextSalary ? __('Update') : __('Create') }}
    </x-primary-link>
</div>
