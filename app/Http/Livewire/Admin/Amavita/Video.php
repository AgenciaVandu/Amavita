<?php

namespace App\Http\Livewire\Admin\Amavita;

use App\Models\Page;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Video extends Component
{
    use WithFileUploads;
    public $file;
    public $video;

    public function mount()
    {
        $this->video = Page::where('name', 'amavita')->where('section', 'video')->first();
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
        $video = $this->video;
        if (!isset($video)) {
            $video = Page::create([
                'name' => 'amavita',
                'section' => 'video',
            ]);
        }
        if ($video->resources->first()) {
            $v = $video->resources->first();
            Storage::delete($v->url);
            $v->delete();
        }

        $url = $this->file->store('resources');
        $video->resources()->create([
            'url' => $url,
            'type' => 'video'
        ]);
        $this->reset(['file']);
        $this->video = Page::find($video->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->emit('render');
        $this->video = Page::find($this->video->id);
    }

    public function render()
    {
        return view('livewire.admin.amavita.video');
    }
}
