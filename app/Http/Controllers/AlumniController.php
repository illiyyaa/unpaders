<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('alumni');
    }
    public function berkabar()
    {
        return view('alumni/berkabar');
    }
    public function kenangan()
    {
        return view('alumni/kenangan');
    }
    public function wikialumni()
    {
        return view('alumni/wikialumni');
    }
  
}
