<div>
    {{-- Slider Header Index --}}
    <div class="px-6 mt-6" x-data="{open:true}">
        <div class="bg-gray-50 shadow-lg mb-4">
            <div class="py-1 px-2 bg-gray-200 rounded rounded-t-lg mb-2 cursor-pointer hover:bg-gray-100"
                x-on:click="open=!open">
                <h2 class="text-xl text-gray-800 font-bold">Seccion video</h2>
            </div>
            <div x-show="open">
                <form wire:submit.prevent="uploadVideo">
                    <div class="flex flex-wrap p-4">
                        @if($video->resources->first())
                                <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                                    <video src="{{ Storage::url($video->resources->first()->url) }}" loop muted preload autoplay
                                        class="h-40 w-60"></video>
                                    <div class="flex justify-between items-center py-2 mx-2">
                                        <i class="fas fa-film ml-2"></i>
                                        <i wire:click="delete({{ $video->resources->first()->id }})"
                                            class="fas fa-trash cursor-pointer text-gray-800 hover:text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                            alt="Eliminar"></i>
                                    </div>
                                </div>
                        @endif
                        @if ($file)
                            <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                                <video src="{{ $file->temporaryUrl() }}" loop muted preload autoplay
                                    class="h-40 w-60 opacity-30"></video>
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
                                <input type='file' wire:model="file" class="hidden" {{-- accept="image/*,video/*" --}}>
                            </label>
                            <!-- Progress Bar -->
                            <div class="text-center py-6 text-white font-bold" x-show="isUploading">
                                <p>Cargando recursos:</p>
                                <div max="100" x-bind:value="progress"
                                    class="h-6 text-white font-bold rounded-lg bg-pink-600" x-bind:text="progress"
                                    x-text="progress"></div>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-end items-center py-2 px-3">

                        @error('file.*') <span class="text-sm text-red-600 mr-2">{{ $message }}</span> @enderror
                        <x-jet-button class="bg-gray-800 text-white px-2 py-1" type="submit"
                            wire:loading.attr="disabled">
                            Guardar
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
