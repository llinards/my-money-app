<x-app-layout>
    <x-slot:title>
        {{ __('Dashboard') }}
    </x-slot>
    <div class="py-12">
        <div class="mx-auto flex max-w-7xl flex-wrap px-4">
            <x-status-message />
            <x-dashboard-card>
                <livewire:salary.salary />
            </x-dashboard-card>
            <x-dashboard-card class="ml-0 mt-5 sm:ml-5 sm:mt-0">
                <livewire:salary.next-salary />
            </x-dashboard-card>
            <x-dashboard-card class="ml-0 mt-5 sm:ml-5 sm:mt-0">
                <livewire:account.account />
            </x-dashboard-card>
            <x-dashboard-card class="mt-5">
                <livewire:summary />
            </x-dashboard-card>
        </div>
    </div>
</x-app-layout>
