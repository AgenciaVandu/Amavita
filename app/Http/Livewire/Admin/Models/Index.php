<?php

namespace App\Http\Livewire\Admin\Models;

use App\Models\Model;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $alula = true, $boreal, $citala;
    public $name, $price;
    public $file;
    public $virtual;
    public $virtual_visible;
    public $price_visible;
    public $video;
    public $video_visible;
    public $model;

    public function mount()
    {
        $this->model = Model::find(1);
        $this->name = $this->model->name;
        $this->price = $this->model->price;
        $this->virtual = $this->model->virtual;
        $this->virtual_visible = $this->model->virtual_visible;
        $this->price_visible = $this->model->price_visible;
        $this->video = $this->model->video;
        $this->video_visible = $this->video_visible;
    }

    public function setNavigation($option)
    {
        switch ($option) {
            case 'alula':
                $this->alula = true;
                $this->boreal = false;
                $this->citala = false;
                $this->model = Model::find(1);
                $this->name = $this->model->name;
                $this->price = $this->model->price;
                $this->virtual = $this->model->virtual;
                $this->virtual_visible = $this->model->virtual_visible;
                $this->price_visible = $this->model->price_visible;
                $this->video = $this->model->video;
                $this->video_visible = $this->video_visible;
                break;
            case 'boreal':
                $this->alula = false;
                $this->boreal = true;
                $this->citala = false;
                $this->model = Model::find(2);
                $this->name = $this->model->name;
                $this->price = $this->model->price;
                $this->virtual = $this->model->virtual;
                $this->virtual_visible = $this->model->virtual_visible;
                $this->price_visible = $this->model->price_visible;
                $this->video = $this->model->video;
                break;
            case 'citala':
                $this->alula = false;
                $this->boreal = false;
                $this->citala = true;
                $this->model = Model::find(3);
                $this->name = $this->model->name;
                $this->price = $this->model->price;
                $this->virtual = $this->model->virtual;
                $this->virtual_visible = $this->model->virtual_visible;
                $this->price_visible = $this->model->price_visible;
                $this->video = $this->model->video;
                $this->video_visible = $this->video_visible;
                break;
        }
    }

    public function update($model)
    {
        $model = Model::find($model);
        if (!empty($this->file)) {
            Storage::delete($model->image);
            $url = $this->file->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video' => $url,
                'video_visible' => $this->video_visible,
            ]);
        } else {
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video_visible' => $this->video_visible,
            ]);
        }

        $this->reset(['file']);
        $this->model = Model::find($this->model->id);
        $this->video = $model->video;
    }




    public function render()
    {
        return view('livewire.admin.models.index');
    }
}
