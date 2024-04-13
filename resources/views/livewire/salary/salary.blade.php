<div>
    @if($hasLastSalary)
        <h3>{{ __('Last salary date') }} - <span
                class="font-semibold">{{$date}}</span>
        </h3>
        <h3>{{ __('Amount') }} - <span
                class="font-semibold">{{$amount}} EUR</span>
        </h3>
    @else
        <h3>{{ __('No info about your last salary') }}</h3>
    @endif
    <hr class="my-4">
    <x-primary-link wire:navigate href="{{route('salary.update')}}">
        {{ $hasLastSalary ? __('Update') : __('Create') }}
    </x-primary-link>
</div>
