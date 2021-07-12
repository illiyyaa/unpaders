<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelanjaController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('belanja');
    }
    public function belanja()
    {
        return view('belanjaumum');
    }
}
