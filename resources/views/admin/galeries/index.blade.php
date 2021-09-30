<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galerias') }}
        </h2>
    </x-slot>

    <div>
        <div class="w-full mt-2">
            @livewire('admin.galeries.index')
        </div>
    </div>
</x-app-layout>
