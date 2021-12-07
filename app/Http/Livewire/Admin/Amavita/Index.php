<?php

namespace App\Http\Livewire\Admin\Amavita;

use Livewire\Component;

class Index extends Component
{
    public $header;
    public $services;
    public $video;
    public $master;


    public function setNavigation($option)
    {
        switch ($option) {
            case 'header':
                $this->header = true;
                $this->services = false;
                $this->video = false;
                $this->master = false;
                break;
            case 'services':
                $this->header = false;
                $this->services = true;
                $this->video = false;
                $this->master = false;
                break;
            case 'video':
                $this->header = false;
                $this->services = false;
                $this->video = true;
                $this->master = false;
                break;
            case 'master':
                $this->header = false;
                $this->services = false;
                $this->video = false;
                $this->master = true;
                break;

            default:
                # code...
                break;
        }
    }

    public function render()
    {
        return view('livewire.admin.amavita.index');
    }
}
