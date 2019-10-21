<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satker;
use App\Balai;
use App\Wilayah;
use App\Paket;
use App\Paket7;

class SatkerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_satker = Satker::where('nmsatker', 'LIKE', '%' . $request->cari . '%')->orWhere('kdsatker', 'LIKE', '%' . $request->cari . "%")->paginate(20);
        } else {
            $data_satker = Satker::paginate(20);
        }
        return view('satker.index', compact('data_satker'));
    }


    public function paket($id)
    {
        $data_satker=Satker::find($id);
        $data_paket = Satker::find($id)->paket;
        $data_balai = Satker::find($id)->paket7;
        dd($data_balai);
        return view('satker.paket', compact('data_satker','data_balai','data_paket'));
    }
   
    public function profile($id)
    {
        $dtpaket = Satker::find($id);
        $listpaket = $dtpaket->paket;
        $profilesatker = Satker::find($id)->paket()->paginate(10);
        $listsatker = Satker::find($id);
        //dd($dtsatker);
        return view('satker.profile', compact('profilesatker', 'listsatker', 'listpaket'));
    }
}
