@if (session('success'))
    <div class="relative mb-4 block w-full rounded-lg bg-green-500 p-4 font-semibold leading-5 text-white opacity-100">
        {{ session('success') }}
    </div>
@endif
