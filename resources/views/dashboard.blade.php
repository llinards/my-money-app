<x-app-layout>
    <x-slot:title>
        {{ __('Dashboard') }}
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap">
            <x-status-message/>
            <livewire:salary/>
            <livewire:next-salary/>
        </div>
    </div>
</x-app-layout>
