<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;

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
        //dd($data_satker);
        return view('satker.satker', compact('data_satker'));
    }
}
