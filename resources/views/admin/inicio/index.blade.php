<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    <div>
        <div class="w-full">
            @livewire('admin.inicio.index')
        </div>
    </div>
</x-app-layout>
