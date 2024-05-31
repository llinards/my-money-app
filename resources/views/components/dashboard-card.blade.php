<div
    {{ $attributes->merge(['class' => 'bg-white shadow-xl overflow-hidden rounded-lg w-full sm:w-1/4 flex justify-center sm:justify-start items-center']) }}
>
    <div class="p-6 text-center sm:text-left">
        {{ $slot }}
    </div>
</div>
