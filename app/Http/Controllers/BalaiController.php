<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balai;
use App\Wilayah;
use App\Satker;
use App\Paket;

class BalaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_balai = Balai::where('nmbalai', 'LIKE', '%' . $request->cari . '%')->paginate(16);
        } else {
            $data_balai = Balai::paginate(16);
        }
        return view('balai.index', compact('data_balai'));
    }

    // public function wilayah_index()
    // {
    //     $data_wilayah = Wilayah::paginate(10);
    //     // $listbalai = Balai::find($id);
    //     // $listpaket = $listbalai->paket;
    //     //dd($listpaket);
    //     return view('balai.wilayah_index', compact('data_wilayah'));
    // }

    public function wilayah($id)
    {
        $wilayah=Wilayah::find($id);
        $data_balai = Wilayah::find($id)->balai;
        $data_satker = Wilayah::find($id)->paket;
        //$listpaket =$data_satker->paginate(10); 
        //$listpaket = $data_balai->paket;
        // $listbalai = $listbalai->paket;
        //dd($listpaket);
        dd($data_satker);
        return view('balai.balai', compact('wilayah','data_balai','data_satker','listpaket'));
    }

    public function satker($id)
    {
        $dtsatker = Balai::find($id)->satker()->paginate(10);
        $listbalai = Balai::find($id);
        $listpaket = $listbalai->paket;
        //dd($dtsatker);
        return view('balai.satker', compact('dtsatker', 'listbalai', 'listpaket'));
    }
}
