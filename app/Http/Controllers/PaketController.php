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

    public function create(Request $request)
    {
        Paket::create($request->all());
        return redirect('/paket')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $data_paket = Paket::find($id);
        $data_paket7=Paket7::find($id);
        //dd($data_paket7);
        return view('paket/edit', compact('data_paket','data_paket7'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'progres_keu' => 'numeric|between:0,100',
            'progres_fisik' => 'numeric|between:0,100'
        ]);
        $data_paket = Paket::find($id);
        //->join;
        $data_paket->update($request->all());
        return redirect('/satker')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $data_paket = Paket::find($id);
        $data_paket->delete($data_paket);
        return redirect('/paket')->with('sukses', 'Data berhasil dihapus');
    }
}
