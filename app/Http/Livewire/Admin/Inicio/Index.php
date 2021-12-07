<?php

namespace App\Http\Livewire\Admin\Inicio;

use Livewire\Component;

class Index extends Component
{
    public $header;


    public function setNavigation($option)
    {
        switch ($option) {
            case 'header':
                $this->header = true;
                break;

            default:
                # code...
                break;
        }
    }


    public function render()
    {
        return view('livewire.admin.inicio.index');
    }
}
