<?php

namespace App\Http\Controllers;

use App\Models\Model;
use App\Models\Page;
use Illuminate\Http\Request;

class AmavitaController extends Controller
{
    public function index()
    {
        $header = Page::where('name', 'amavita')->where('section', 'header')->first();
        $services = Page::where('name', 'amavita')->where('section', 'services')->first();
        $video = Page::where('name', 'amavita')->where('section', 'video')->first();
        $master = Page::where('name', 'amavita')->where('section', 'master')->first();
        $models = Model::all();
        return view('amavita', compact('header', 'services', 'video', 'master', 'models'));
    }
}
