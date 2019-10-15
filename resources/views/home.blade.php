@extends('layouts.master')

@section('content')
<div class="content">
    <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">  
            <h1 class="profile-username text-center">Kementerian Pekerjaan Umum dan Perumahan Rakyat</h1>  
            <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
            <div class="row mt-5">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-map"></i></span>                
                        <div class="info-box-content">
                            <span class="info-box-text">
                                {{-- <a href="/wilayah"> --}}
                                    Wilayah
                                {{-- </a> --}}
                            </span>
                            <span class="info-box-number">
                                        {{-- {{$wilayah->count()}}
                                        <small>wilayah</small> <br/>   --}}
                                        @foreach ($wilayah as $no => $wilayah)
                                        <tr>                                            
                                            <td>
                                                <small><a href="/wilayah/{{$wilayah->id}}">{{++$no}}.{{$wilayah->nmwilayah}} </small><br/>                                         
                                            </td>
                                        </tr>    
                                        @endforeach
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>                
                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/balai">Jumlah Balai</a></span>
                            <span class="info-box-number">
                                        {{$balai->count()}}
                                        <small>balai</small>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-building"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text"><a href="/satker">Jumlah Satker</a></span>
                                <span class="info-box-number">{{$satker->count()}}<small>satker</small></span>
                            </div>
                        </div>
                    </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/paket">Jumlah Paket</a></span>
                            <span class="info-box-number">{{$paket->count()}}<small>paket</small></span>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">New Members</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">                
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><sup style="font-size: 20px">Rp</sup>{{number_format($paket->sum('pagurmp'))}}</h3>                        
                            <p>Jumlah Pagu</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{number_format($paket7->avg('progres_keu'),2)}}</h3>                        
                            <p>Progres Keuangan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{number_format($paket7->avg('progres_fisik'),2)}}</h3>                        
                            <p>Progres Fisik</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
