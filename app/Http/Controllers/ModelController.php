<?php

namespace App\Http\Controllers;

use App\Models\Model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        $models = Model::all();
        return view('modelos.modelos', compact('models'));
    }

    public function show(Model $model)
    {
        $models = Model::all();
        switch ($model->id) {
            case '1':
                return view('modelos.alula', compact('model', 'models'));
                break;
            case '2':
                return view('modelos.boreal', compact('model', 'models'));
                break;
            case '3':
                return view('modelos.citala', compact('model', 'models'));
                break;
        }
    }

    public function lead(Model $model)
    {
        $models = Model::all();
        switch ($model->id) {
            case '1':
                return view('modelos.lead.alula', compact('model', 'models'));
                break;
            case '2':
                return view('modelos.lead.boreal', compact('model', 'models'));
                break;
            case '3':
                return view('modelos.lead.citala', compact('model', 'models'));
                break;
        }
    }
}
