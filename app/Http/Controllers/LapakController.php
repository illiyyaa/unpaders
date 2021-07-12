<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LapakController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('lapak');
    }
    public function kiatbisnis()
    {
        return view('lapak/kiatbisnis');
    }
    public function kuliner()
    {
        return view('lapak/kuliner');
    }
    public function merchandise()
    {
        return view('lapak/merchandise');
    }
    public function preloved()
    {
        return view('lapak/preloved');
    }
    public function umkmcenter()
    {
        return view('lapak/umkmcenter');
    }
}
