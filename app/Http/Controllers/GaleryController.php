<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $albumes = Album::all();
        return view('gallery.index', compact('albumes'));
    }

    public function show(Album $album)
    {
        return view('gallery.show', compact('album'));
    }
}
