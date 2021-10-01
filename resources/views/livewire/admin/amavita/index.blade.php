<div>
    {{-- Vertical Navigation --}}
    <div class="w-full sm:px-6 lg:px-8 mt-6">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <h1 class="text-3xl text-gray-700 font-bold ml-6">Administracion Amavita</h1>
                <div class="grid grid-cols-5 gap-2 mt-8">
                    <div class="bg-gray-100 shadow-lg">
                        <div class="py-2 pace-y-1">
                            <x-vertical-nav-link class="cursor-pointer" color="yellow"
                                wire:click="setNavigation('header')" :active="$header">
                                {{ __('Slider Header') }}
                            </x-vertical-nav-link>
                            <x-vertical-nav-link class="cursor-pointer" color="yellow"
                                wire:click="setNavigation('services')" :active="$services">
                                {{ __('Slider Servicios') }}
                            </x-vertical-nav-link>
                            <x-vertical-nav-link class="cursor-pointer" color="yellow"
                                wire:click="setNavigation('video')" :active="$video">
                                {{ __('Seccion Video') }}
                            </x-vertical-nav-link>
                            <x-vertical-nav-link class="cursor-pointer" color="yellow"
                                wire:click="setNavigation('master')" :active="$master">
                                {{ __('Seccion Master') }}
                            </x-vertical-nav-link>
                        </div>
                    </div>
                    <div class="col-span-4">
                        @if ($header)
                            @livewire('admin.amavita.header')
                        @endif
                        @if ($services)
                            @livewire('admin.amavita.services')
                        @endif
                        @if ($video)
                            @livewire('admin.amavita.video')
                        @endif
                        @if ($master)
                            @livewire('admin.amavita.master')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
