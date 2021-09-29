<?php

namespace App\Http\Livewire\Admin\Inicio;

use App\Models\Page;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Header extends Component
{
    use WithFileUploads;
    public $files;
    public $header;

    public function mount()
    {
        $this->header = Page::where('name', 'index')->where('section', 'header')->first();
    }

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);
    }
    public function uploadHeaderSlider()
    {
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);


        $header = $this->header;

        if (!isset($header)) {
            $header = Page::create([
                'name' => 'index',
                'section' => 'header',
            ]);
        }
        foreach ($this->files as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();
            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $header->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {
                $header->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files']);
        $this->header = Page::find($header->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->emit('render');
        $this->header = Page::find($this->header->id);
    }

    public function render()
    {
        return view('livewire.admin.inicio.header');
    }
}
