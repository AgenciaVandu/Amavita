<?php

namespace App\Http\Livewire\Admin\Amavita;

use App\Models\Page;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Services extends Component
{
    use WithFileUploads;
    public $files;
    public $services;

    public function mount()
    {
        $this->services = Page::where('name', 'amavita')->where('section', 'services')->first();
    }

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);
    }
    public function uploadServicesSlider()
    {
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);


        $services = $this->services;

        if (!isset($services)) {
            $services = Page::create([
                'name' => 'amavita',
                'section' => 'services',
            ]);
        }
        foreach ($this->files as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();
            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $services->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {
                $services->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files']);
        $this->services = Page::find($services->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->emit('render');
        $this->services = Page::find($this->services->id);
    }

    public function render()
    {
        return view('livewire.admin.amavita.services');
    }
}
