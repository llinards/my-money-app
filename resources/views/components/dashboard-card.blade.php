<div
    {{ $attributes->merge(['class' => 'bg-white shadow-xl overflow-hidden rounded-lg w-full sm:w-1/4 flex justify-center sm:justify-start items-center']) }}>
    <div class="text-center sm:text-left p-6">
        {{ $slot }}
    </div>
</div>
