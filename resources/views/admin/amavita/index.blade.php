<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vista Amavita') }}
        </h2>
    </x-slot>

    <div>
        <div class="w-full mt-2">
            @livewire('admin.amavita.index')
        </div>
    </div>
</x-app-layout>
