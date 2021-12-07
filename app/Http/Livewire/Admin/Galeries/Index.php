<?php

namespace App\Http\Livewire\Admin\Galeries;

use App\Models\Album;
use App\Models\Albumes;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Index extends Component
{
    use WithFileUploads;

    public $create = false;
    public $add = false;
    public $name;
    public $image;
    public $files = [];
    public $album;
    public $edit = false;

    protected $rules = ['files.*' => 'required|image|mimes:jpg,jpeg,png,svg,gif',];

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'required|image|mimes:jpg,jpeg,png,svg,gif',
        ]);
    }

    public function setBoolean()
    {
        $this->add = false;
        $this->create = false;
        $this->edit = false;
    }

    public function storealbum()
    {
        $url = $this->image->store('resources');
        album::create([
            'name' => $this->name,
            'image' => $url
        ]);

        $this->create = false;
        $this->add = false;

        $this->reset(['image', 'name']);
    }

    public function addItems($album)
    {
        $album = album::find($album);
        $this->add = true;
        $this->album = album::find($album->id);
    }

    public function edit($album)
    {
        $album = album::find($album);
        $this->edit = true;
        $this->album = $album;
        $this->name = $album->name;
    }
    public function updatealbum()
    {
        if (!empty($this->image)) {
            $url = $this->image->store('resources');
            $this->album->update([
                'name' => $this->name,
                'image' => $url
            ]);
        } else {
            $this->album->update([
                'name' => $this->name,
            ]);
        }

        $this->create = false;
        $this->add = false;
    }

    public function uploadPhotos($album)
    {
        $this->validate();

        $album = Album::find($album);
        foreach ($this->files as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();
            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $album->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {
                $album->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files']);
        $this->album = album::find($album->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->album = album::find($this->album->id);
    }

    public function render()
    {
        return view('livewire.admin.galeries.index', [
            'albumes' => Album::orderBy('id', 'desc')->get()
        ]);
    }
}
