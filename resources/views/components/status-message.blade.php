@if (session('success'))
    <div
        class="font-semibold relative mb-4 block w-full rounded-lg bg-green-500 p-4 leading-5 text-white opacity-100">
        {{ session('success') }}
    </div>
@endif
