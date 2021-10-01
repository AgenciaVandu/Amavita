<div class="bg-white mx-8 mt-6 rounded-lg shadow-lg">
    <h1 class="text-3xl text-gray-700 font-bold ml-6 pt-4">Administracion de Galerias</h1>
    @if ($create)
        <div class="p-4">
            <h1 class="text-2xl font-bold text-gray-700">Crear nuevo album</h1>
            <form wire:submit.prevent='storealbum'>
                <div class="my-2">
                    <x-jet-label>
                        Nombre:
                    </x-jet-label>
                    <x-jet-input type="text" class="w-full py-1" wire:model="name"></x-jet-input>
                </div>
                <div class="my-2">
                    <x-jet-label>
                        Portada:
                    </x-jet-label>
                    @if ($image)
                        Vista previa:
                        <img src="{{ $image->temporaryUrl() }}">
                    @endif

                    <input type="file" wire:model="image">

                    @error('image') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="flex justify-end">
                    <x-jet-button>
                        Crear galeria
                    </x-jet-button>
                </div>
            </form>
        </div>
    @elseif ($add)
        <div class="p-4">
            <h1 class="text-2xl text-gray-700 font-bold">{{ $album->name }}</h1>
        </div>
        <form wire:submit.prevent="uploadPhotos({{ $album->id }})">
            <div class="flex flex-wrap p-4">
                @isset($album->resources)
                    @foreach ($album->resources as $resource)
                        <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                            <img class="h-40 w-60 object-cover" src="{{ Storage::url($resource->url) }}"
                                title="{{ Storage::url($resource->url) }}">
                            <div class="flex justify-between items-center py-2 mx-2">
                                <i class="far fa-image ml-2"></i>
                                <i wire:click="delete({{ $resource }})"
                                    class="fas fa-trash cursor-pointer text-gray-800 hover:text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                    alt="Eliminar"></i>
                            </div>
                        </div>
                    @endforeach
                @endisset
                @if ($files)
                    @foreach ($files as $file)
                        <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                            <img class="h-40 w-60 object-cover opacity-30" src="{{ $file->temporaryUrl() }}"
                                wire:loading.remove wire:target='updatedFiles'>
                        </div>
                    @endforeach
                @endif
                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <label
                        class="w-60 flex flex-col items-center ml-2 mt-4 px-4 py-10 bg-white text-gray-700 rounded-l-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-gray-100 hover:text-pink-500">
                        <i class="far fa-plus-square text-5xl"></i>
                        <span class="mt-4">Seleccionar archivo(s)</span>
                        <input type='file' wire:model="files" class="hidden" multiple {{-- accept="image/*,video/*" --}}>
                    </label>
                    <!-- Progress Bar -->
                    <div class="text-center py-6 text-white font-bold" x-show="isUploading">
                        <p>Cargando recursos:</p>
                        <div max="100" x-bind:value="progress" class="h-6 text-white font-bold rounded-lg bg-pink-600"
                            x-bind:text="progress" x-text="progress"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center py-2 px-3">
                @error('files') <span class="text-sm text-red-600 mr-2">{{ $message }}</span> @enderror
                <x-jet-secondary-button wire:click="setBoolean">Regresar</x-jet-secondary-button>
                <x-jet-button class="bg-gray-800 text-white ml-2 px-2 py-1" type="submit" wire:loading.attr="disabled">
                    Guardar
                </x-jet-button>
            </div>
        </form>
    @elseif ($edit)

        <div class="p-4">
            <h1 class="text-2xl font-bold text-gray-700">Editar album</h1>
            <form wire:submit.prevent='updatealbum'>
                <div class="my-2">
                    <x-jet-label>
                        Nombre:
                    </x-jet-label>
                    <x-jet-input type="text" class="w-full py-1" wire:model="name"></x-jet-input>
                </div>
                <div class="my-2">
                    <x-jet-label>
                        Portada:
                    </x-jet-label>

                    <img src="{{ Storage::url($album->image) }}">
                    <input type="file" wire:model="image">

                    @error('image') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="flex justify-end">
                    <x-jet-secondary-button wire:click="setBoolean">Regresar</x-jet-secondary-button>
                    <x-jet-button class="ml-2">
                        Actualizar galeria
                    </x-jet-button>
                </div>
            </form>
        </div>
    @else
        <div class="flex justify-end p-4">
            <x-jet-button wire:click="$set('create','true')">
                Agregar galeria
            </x-jet-button>
        </div>
        <div class="flex justify-center items-center px-4 flex-wrap mb-4">
            @foreach ($albumes as $album)
                <div class="shadow-lg rounded-lg mx-2 mb-4">
                    <img src="{{ Storage::url($album->image) }}" class="w-64 h-64 object-cover object-center" alt="">
                    <p class="font-bold text-xl text-center mt-2 text-gray-700">{{ $album->name }}</p>
                    <div class="flex justify-between px-3 py-2">
                        <i class="fas fa-pen cursor-pointer" wire:click="edit({{ $album->id }})"></i>
                        <i class="fas fa-plus cursor-pointer" wire:click="addItems({{ $album->id }})"></i>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</div>
