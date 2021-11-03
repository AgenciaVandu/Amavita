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
    public $img1;
    public $img2;
    public $img3;
    public $virtual;
    public $virtual_visible;
    public $price_visible;
    public $video;
    public $video_visible;
    public $model;
    public $imgen1;
    public $imgen2;
    public $imgen3;

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
        $this->imgen1 = $this->model->img1;
        $this->imgen2 = $this->model->img2;
        $this->imgen3 = $this->model->img3;
    }

    public function setNavigation($option)
    {
        switch ($option) {
            case 'alula':
                $this->reset(['file', 'img1', 'img2', 'img3']);
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
                $this->imgen1 = $this->model->img1;
                $this->imgen2 = $this->model->img2;
                $this->imgen3 = $this->model->img3;
                break;
            case 'boreal':
                $this->reset(['file', 'img1', 'img2', 'img3']);
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
                $this->imgen1 = $this->model->img1;
                $this->imgen2 = $this->model->img2;
                $this->imgen3 = $this->model->img3;
                break;
            case 'citala':
                $this->reset(['file', 'img1', 'img2', 'img3']);
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
                $this->imgen1 = $this->model->img1;
                $this->imgen2 = $this->model->img2;
                $this->imgen3 = $this->model->img3;
                break;
        }
    }

    public function update($model)
    {
        $model = Model::find($model);
        if (!empty($this->file) && !empty($this->img1) && !empty($this->img2) && !empty($this->img3)) {
            Storage::delete($model->image);
            $url = $this->file->store('resources');
            $img1 = $this->img1->store('resources');
            $img2 = $this->img2->store('resources');
            $img3 = $this->img3->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video' => $url,
                'video_visible' => $this->video_visible,
                'img1' => $img1,
                'img2' => $img2,
                'img3' => $img3,
            ]);
        } elseif (!empty($this->file) && !empty($this->img1) && !empty($this->img2) && empty($this->img3)) {
            Storage::delete($model->image);
            $url = $this->file->store('resources');
            $img1 = $this->img1->store('resources');
            $img2 = $this->img2->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video' => $url,
                'video_visible' => $this->video_visible,
                'img1' => $img1,
                'img2' => $img2,
            ]);
        } elseif (!empty($this->file) && !empty($this->img1) && empty($this->img2) && !empty($this->img3)) {
            Storage::delete($model->image);
            $url = $this->file->store('resources');
            $img1 = $this->img1->store('resources');
            $img3 = $this->img3->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video' => $url,
                'video_visible' => $this->video_visible,
                'img1' => $img1,
                'img3' => $img3,
            ]);
        } elseif (!empty($this->file) && empty($this->img1) && !empty($this->img2) && !empty($this->img3)) {
            Storage::delete($model->image);
            $url = $this->file->store('resources');
            $img2 = $this->img2->store('resources');
            $img3 = $this->img3->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video' => $url,
                'video_visible' => $this->video_visible,
                'img2' => $img2,
                'img3' => $img3,
            ]);
        } elseif (empty($this->file) && !empty($this->img1) && !empty($this->img2) && !empty($this->img3)) {
            Storage::delete($model->image);
            $img1 = $this->img1->store('resources');
            $img2 = $this->img2->store('resources');
            $img3 = $this->img3->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video_visible' => $this->video_visible,
                'img1' => $img1,
                'img2' => $img2,
                'img3' => $img3,
            ]);
        } elseif (empty($this->file) && empty($this->img1) && !empty($this->img2) && !empty($this->img3)) {
            Storage::delete($model->image);
            $img2 = $this->img2->store('resources');
            $img3 = $this->img3->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video_visible' => $this->video_visible,
                'img2' => $img2,
                'img3' => $img3,
            ]);
        } elseif (empty($this->file) && empty($this->img1) && empty($this->img2) && !empty($this->img3)) {
            Storage::delete($model->image);
            $img3 = $this->img3->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video_visible' => $this->video_visible,
                'img3' => $img3,
            ]);
        } elseif (empty($this->file) && !empty($this->img1) && empty($this->img2) && empty($this->img3)) {
            Storage::delete($model->image);
            $img1 = $this->img1->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video_visible' => $this->video_visible,
                'img1' => $img1,
            ]);
        } elseif (empty($this->file) && empty($this->img1) && !empty($this->img2) && empty($this->img3)) {
            Storage::delete($model->image);
            $img2 = $this->img2->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video_visible' => $this->video_visible,
                'img2' => $img2,

            ]);
        }
        elseif (empty($this->file) && empty($this->img1) && empty($this->img2) && !empty($this->img3)) {
            Storage::delete($model->image);
            $img3 = $this->img3->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video_visible' => $this->video_visible,
                'img3' => $img3,
            ]);
        }else {
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'price_visible' => $this->price_visible,
                'virtual' => $this->virtual,
                'virtual_visible' => $this->virtual_visible,
                'video_visible' => $this->video_visible,
            ]);
        }

        $this->reset(['file', 'img1', 'img2', 'img3']);
        $this->model = Model::find($this->model->id);
        $this->video = $model->video;
        $this->imgen1 = $model->img1;
        $this->imgen2 = $model->img2;
        $this->imgen3 = $model->img3;
    }




    public function render()
    {
        return view('livewire.admin.models.index');
    }
}
