<?php

namespace App\Http\Livewire\Admin\Amavita;

use App\Models\Page;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Master extends Component
{
    use WithFileUploads;
    public $file;
    public $master;

    public function mount()
    {
        $this->master = Page::where('name', 'amavita')->where('section', 'master')->first();
    }

    public function updatedFiles()
    {
        $this->validate([
            'file.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);
    }
    public function uploadVideo()
    {
        $this->validate([
            'file.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);
        $master = $this->master;
        if (!isset($master)) {
            $master = Page::create([
                'name' => 'amavita',
                'section' => 'master',
            ]);
        }
        if ($master->resources->first()) {
            $v = $master->resources->first();
            Storage::delete($v->url);
            $v->delete();
        }

        $url = $this->file->store('resources');
        $master->resources()->create([
            'url' => $url,
            'type' => 'image'
        ]);
        $this->reset(['file']);
        $this->master = Page::find($master->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->emit('render');
        $this->master = Page::find($this->master->id);
    }

    public function render()
    {
        return view('livewire.admin.amavita.master');
    }
}
