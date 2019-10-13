@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">  
        <h1 class="profile-username text-center">
            {{-- {{$data_satker<=nmsatker()}} --}}
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
                                    {{$data_satker->count()}}
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
                                    {{-- {{$listpaket->count()}} --}}
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
                                    {{-- {{$data_balai->count()}} --}}
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
                                    {{-- {{$data_satker->count()}} --}}
                                    <small>%</small>
                        </span>
                    </div>
                </div>
            </div>
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
                {{-- {{$data_satker->links()}} --}}
            </div>
        
        </div>
       
    </div>
    
</div>

@endsection