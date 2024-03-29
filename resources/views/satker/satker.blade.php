@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">  
        <h1 class="profile-username text-center">
            {{-- {{$wilayah->nmwilayah}} --}}
        </h1>  
        <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
<div class="row mt-5">
        
        
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-map"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">
                        {{-- <a href="/wilayah/{{$wilayah->id}}"> --}}
                                Jumlah Balai
                            </a>
                        </span>
                        <span class="info-box-number">
                                    {{$data_balai->count()}}
                                    <small>balai</small> <br/>                                     
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-map"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">
                        <a href="/satker">
                                Jumlah Satker
                            </a>
                        </span>
                        <span class="info-box-number">
                                    {{$data_satker->count()}}
                                    <small>satker</small> <br/>                                     
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text"><a href="/balai">Jumlah Paket</a></span>
                        <span class="info-box-number">
                                    {{$listpaket->count()}}
                                    <small>paket</small>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-map"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">
                        
                                Progres Keuangan
                            </a>
                        </span>
                        <span class="info-box-number">
                                    {{$data_balai->count()}}
                                    <small>%</small> <br/>                                     
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-building"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">Progres Fisik</a></span>
                        <span class="info-box-number">
                                    {{$data_satker->count()}}
                                    <small>%</small>
                        </span>
                    </div>
                </div>
            </div>
<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Satker</h3>
            </div>
        
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Satker</th>
                            {{-- <th>Nama Paket</th>
                            <th>Pagu</th>
                            <th>Rencana Keuangan</th>
                            <th>Rencana Fisik</th>
                            <th>Progres Keuangan</th>
                            <th>Progres Fisik</th>
                            <th>Satker ID</th> --}}
                            
                        </tr>

                    @foreach ($data_satker as $no => $satker)  
                    
                        <tr>
                            <td>{{++$no}}</td>
                            <td><a href="/paket/{{$satker->id}}">{{$satker->nmsatker}}</td>
                            <td></td>
                            {{-- <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                             --}}
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{-- {{$data_satker->links()}} --}}
            </div>
        
        </div>
       
    </div>
    
</div>

@endsection