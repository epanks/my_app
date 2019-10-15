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
        //$balaipaket = $data_balai->paket7;
        $data_satker = Wilayah::find($id)->satker;
        $listpaket =Wilayah::find($id)->paket; 
        //$listpaket = $data_balai->paket;
        // $listbalai = $listbalai->paket;
        //dd($listpaket);
        //dd($balaipaket);
        return view('balai.balai', compact('wilayah','data_balai','data_satker','listpaket'));
    }

    public function satker($id)
    {
        $data_satker = Balai::find($id)->satker;
        $data_balai = Balai::find($id);
        $data_paket = $data_balai->paket;
        $data_paket7=$data_balai->paket7;
        //dd($data_satker);
        return view('balai.satker', compact('data_satker', 'data_balai', 'data_paket','data_paket7'));
    }
}
