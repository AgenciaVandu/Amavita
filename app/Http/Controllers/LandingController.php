<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Model;
use App\Models\Page;

class  LandingController extends Controller
{
    public function index()
    {
        $header = Page::where('name', 'index')->where('section', 'header')->first();
        $models = Model::all();
        $services = Page::where('name', 'amavita')->where('section', 'services')->first();
        $albumes = Album::all();
        $price = Model::orderBy('price', 'asc')->first();
        return view('index', compact('header', 'models', 'services', 'albumes','price'));
    }

    public function contact()
    {
        return view('contacto');
    }


    public function tanks()
    {
        return view('modelos.lead.gracias');
    }
}
