<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktualController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('aktual');
    }
    public function acara()
    {
        return view('aktual/acara');
    }
    public function berita()
    {
        return view('aktual/berita');
    }
    public function opini()
    {
        return view('aktual/berita');
    }
}
