<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use App\Kecamatan;


class DesaController extends Controller
{
    public function index()
    {
        
        $data_desa = Desa::find(10);
        $data_kecamatan=$data_desa;

        dd($data_kecamatan);
        return view('desa.index', compact('data_desa','data_kecamatan'));
    }
}
