@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Balai</h3>
            </div>
        
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Balai</th>
                            <th>Nama Paket</th>
                            <th>Pagu</th>
                            <th>Output</th>
                            <th>Satuan Output</th>
                            <th>Outcome</th>
                            <th>Satuan Outcome</th>
                            <th>Kode Output</th>
                            <th>Modify</th>
                            
                        </tr>

                    @foreach ($data_paket as $no => $paket)  
                    
                        <tr>
                            <td>{{++$no}}</td>
                            <td>{{$paket->kdsatker}}</td>
                            <td><a href="#">{{$paket->nmpaket}}</td>
                            <td class="text-right">{{number_format($paket->pagurmp)}}</td>
                            <td>{{number_format($paket->trgoutput)}}</td>
                            <td>{{$paket->satoutput}}</td>
                            <td>{{number_format($paket->trgoutcome)}}</td>
                            <td>{{$paket->satoutcome}}</td>
                            <td>{{$paket->kdoutput}}</td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{$data_paket->links()}}
            </div>
        
        </div>
       
    </div>
    
</div>

@endsection