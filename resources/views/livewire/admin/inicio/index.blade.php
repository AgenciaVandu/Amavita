<div>
    {{-- Vertical Navigation --}}
    <div class="w-full sm:px-6 lg:px-8 mt-6">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <h1 class="text-3xl text-gray-700 font-bold ml-6">Administracion del Inicio</h1>
                <div class="grid grid-cols-5 gap-2 mt-8">
                    <div class="bg-gray-100 shadow-lg">
                        <div class="py-2 pace-y-1">
                            <x-vertical-nav-link class="cursor-pointer" color="yellow"
                                wire:click="setNavigation('header')" :active="$header">
                                {{ __('Slider Header') }}
                            </x-vertical-nav-link>
                        </div>
                    </div>
                    <div class="col-span-4">
                        @if ($header)
                            @livewire('admin.inicio.header')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
