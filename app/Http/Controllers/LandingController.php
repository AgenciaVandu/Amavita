<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class  LandingController extends Controller
{
    public function index()
    {
        $header = Page::where('name', 'index')->where('section', 'header')->first();
        return view('index', compact('header'));
    }
}
