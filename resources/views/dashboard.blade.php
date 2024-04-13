<x-app-layout>
    <x-slot:title>
        {{ __('Dashboard') }}
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap">
            <x-status-message/>
            <x-dashboard-card>
                <livewire:salary.salary/>
            </x-dashboard-card>
            <x-dashboard-card class="mt-5 sm:mt-0 ml-0 sm:ml-5">
                <livewire:salary.next-salary/>
            </x-dashboard-card>
            <x-dashboard-card class="mt-5 sm:mt-0 ml-0 sm:ml-5">
                <livewire:account.account/>
            </x-dashboard-card>
        </div>
    </div>
</x-app-layout>
