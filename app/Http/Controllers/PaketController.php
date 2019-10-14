<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Wilayah;
use App\Paket7;
use App\Balai;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_paket = Paket::where('nmpaket', 'LIKE', '%' . $request->cari . '%')->orWhere('kdpaket', 'LIKE', '%' . $request->cari . "%")->paginate(10);
        } else {
            $data_paket = Paket::paginate(10);
        }
        return view('paket.index', compact('data_paket'));
    }


    public function satker($id)
    {
        $data_satker = Balai::find($id)->satker;
        //$wilayah=Wilayah::get();
        //dd($data_satker);
        return view('satker.satker', compact('data_satker','wilayah'));
    }

    public function progres($id)
    {
        $data_paket = Paket::find($id)->satker;
        //$wilayah=Wilayah::get();
        //dd($data_satker);
        return view('satker.satker', compact('data_satker','wilayah'));
    }
}
