<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;
use App\Balai;
use App\Satker;
use App\Paket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        $paket = Paket::all();
        $balai = Balai::all();
        $satker = Satker::all();
        $wilayah = Wilayah::all();
        //dd($paket);
        return view('home', compact('satker', 'balai','wilayah','paket'));
    }
}
