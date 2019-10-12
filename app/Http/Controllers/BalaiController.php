<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balai;
use App\Wilayah;
use App\Satker;

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

    public function wilayah_index()
    {
        $data_wilayah = Wilayah::paginate(10);
        // $listbalai = Balai::find($id);
        // $listpaket = $listbalai->paket;
        //dd($listpaket);
        return view('balai.wilayah_index', compact('data_wilayah'));
    }

    public function wilayah($id)
    {
        $data_balai = Wilayah::find($id)->balai;
        // $listbalai = $data_balai->balai;
        // $listbalai = $listbalai->paket;
        //dd($data_balai);
        return view('balai.balai', compact('data_balai','listbalai'));
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
