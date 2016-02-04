<?php

namespace App\Http\Controllers;

use App\Estaciones;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index()
    {
        return view('pages.sl_results',[
            'units' => Estaciones::all()
            ->SortBy('status',false)
        ]);
    }
}
