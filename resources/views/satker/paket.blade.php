@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<div class="row mt-5">
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Output</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Progres</a>
            </li>                
        </ul>
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
                            <th>Satoutcome</th>
                            <th>Kode Output</th>
                            <th>Modify</th>
                        </tr>

                    @foreach ($data_satker as $no => $satker)  
                    
                        <tr>
                            <td>{{++$no}}</td>
                            <td>{{$satker->kdsatker}}</td>
                            <td><a href="#">{{$satker->nmpaket}}</td>
                            <td class="text-right">{{number_format($satker->pagurmp)}}</td>
                            <td>{{number_format($satker->trgoutput)}}</td>
                            <td>{{$satker->satoutput}}</td>
                            <td>{{number_format($satker->trgoutcome)}}</td>
                            <td>{{$satker->satoutcome}}</td>
                            <td>{{$satker->kdoutput}}</td>
                            <td></td>                            
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{$data_satker->links()}}
            </div>
        
        </div>
       
    </div>
    
</div>

@endsection