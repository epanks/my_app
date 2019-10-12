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
                            <th>Nama Desa</th>
                            <th>Nama Kecamatan</th>
                            <th>Nama Kabupaten</th>
                            <th>Nama Provinsi</th>                            
                            
                        </tr>

                    @foreach ($data_desa as $no => $desa)  
                    
                        <tr>
                            <td>{{++$no}}</td>
                            <td>{{$desa->nmdesa}}</td>
                            <td>{{$desa->nmkecamatan}}</td>
                            <td>{{$desa->nmkabupaten}}</td>
                            <td>{{$desa->nmprovinsi}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{$data_desa->links()}}
            </div>
        
        </div>
       
    </div>
    
</div>

@endsection