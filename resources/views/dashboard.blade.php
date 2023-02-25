<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-5 mx-auto bg-white sm:px-6 lg:px-8">
            <livewire:orders-table />
        </div>
    </div>
</x-app-layout>
