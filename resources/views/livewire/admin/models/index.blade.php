<div>
    {{-- Vertical Navigation --}}
    <div class="w-full sm:px-6 lg:px-8 mt-6">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <h1 class="text-3xl text-gray-700 font-bold ml-6">Administracion de Modelos</h1>
                <div class="grid grid-cols-5 gap-2 mt-8">
                    <div class="bg-gray-100 shadow-lg">
                        <div class="py-2 pace-y-1">
                            <x-vertical-nav-link class="cursor-pointer" color="yellow"
                                wire:click="setNavigation('alula')" :active="$alula">
                                {{ __('Modelo 1') }}
                            </x-vertical-nav-link>
                            <x-vertical-nav-link class="cursor-pointer" color="yellow"
                                wire:click="setNavigation('boreal')" :active="$boreal">
                                {{ __('Modelo 2') }}
                            </x-vertical-nav-link>
                            <x-vertical-nav-link class="cursor-pointer" color="yellow"
                                wire:click="setNavigation('citala')" :active="$citala">
                                {{ __('Modelo 3') }}
                            </x-vertical-nav-link>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <form wire:submit.prevent="update({{ $model->id }})" class="px-4 text-right">
                            <x-jet-label class="text-left">
                                Nombre:
                            </x-jet-label>
                            <x-jet-input type="text" class="w-full mb-2" wire:model="name" />
                            <x-jet-label class="text-left">
                                Precio:
                            </x-jet-label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                    $
                                </span>
                                <input type="number"
                                    class="flex-1 block w-full rounded-r border border-gray-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border-l-0 sm:text-sm"
                                    wire:model="price">
                            </div>
                            <x-jet-label class="text-left mt-2 mb-2">
                                Visible:
                                <input type="checkbox" wire:model="price_visible">
                            </x-jet-label>
                            <x-jet-label class="text-left mt-2 mb-2">
                                Recorrido Virtual:
                            </x-jet-label>
                            <textarea rows="7"
                                class="w-full rounded-lg border border-gray-400 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                wire:model="virtual"></textarea>
                            <x-jet-label class="text-left mt-2 mb-2">
                                Visible:
                                <input type="checkbox" wire:model="virtual_visible">
                            </x-jet-label>
                            <x-jet-label class="text-left mt-4">Video</x-jet-label>
                            <div class="flex flex-wrap">
                                @isset($video)
                                    <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                                        <video class="h-40 w-60 object-cover" src="{{ Storage::url($video) }}"></video>
                                        <div class="flex justify-between items-center py-2 mx-2">
                                            <i class="fas fa-film ml-2"></i>
                                        </div>
                                    </div>
                                @endisset
                                @if ($file)
                                    <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                                        <video class="h-40 w-60 object-cover opacity-30"
                                            src="{{ $file->temporaryUrl() }}" wire:loading.remove
                                            wire:target='updatedFile'></video>
                                    </div>
                                @endif
                                <div x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label
                                        class="w-60 flex flex-col items-center ml-2 mt-4 px-4 py-10 bg-white text-gray-700 rounded-l-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-gray-100 hover:text-pink-500">
                                        <i class="far fa-plus-square text-5xl"></i>
                                        <span class="mt-4">Seleccionar archivo(s)</span>
                                        <input type='file' wire:model="file" class="hidden">
                                    </label>
                                    <!-- Progress Bar -->
                                    <div class="text-center py-6 text-white font-bold" x-show="isUploading">
                                        <p>Cargando recursos:</p>
                                        <div max="100" x-bind:value="progress"
                                            class="h-6 text-white font-bold rounded-lg bg-pink-600"
                                            x-bind:text="progress" x-text="progress"></div>
                                    </div>
                                </div>
                            </div>
                            <x-jet-label class="text-left mt-2 mb-2">
                                Visible:
                                <input type="checkbox" wire:model="video_visible">
                            </x-jet-label>
                            <div class="flex justify-end items-center py-2 px-3">
                                @error('file*') <span class="text-sm text-red-600 mr-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <x-jet-button type="submit" class="my-2">
                                Actualizar
                            </x-jet-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
