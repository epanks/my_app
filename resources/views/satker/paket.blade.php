@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">  
        <h1 class="profile-username text-center">
            {{$data_satker->nmsatker}}
        </h1>  
        <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
<div class="row mt-5">
        
        
            
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Paket</a></span>
                        <span class="info-box-number">
                                    {{$data_paket->count()}}
                                    <small>paket</small>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>                
                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/balai">Jumlah Pagu</a></span>
                            <span class="info-box-number">
                                <small>Rp</small>
                                        {{number_format($data_paket->sum('pagurmp'))}}
                            </span>
                        </div>
                    </div>
                </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-bar"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">
                        
                                Progres Keuangan
                            </a>
                        </span>
                        <span class="info-box-number">
                                    {{$data_paket->count()}}
                                    <small>%</small> <br/>                                     
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-line"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">Progres Fisik</a></span>
                        <span class="info-box-number">
                                    {{$data_paket->count()}}
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
                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNew">
                        Add New
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                </div>
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

                    @foreach ($data_paket as $no => $satker)  
                    
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
                            <td>
                                    <a href="/paket/{{$satker->id}}/edit">
                                        <i class="fa fa-edit blue"></i>
                                    </a>
                                    /
                                    <a href="/paket/{{$satker->id}}/delete">
                                        <i class="fa fa-trash red" onclick="return confirm('Yakin data mau dihapus')"></i>
                                    </a>
                            </td>                            
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{-- {{$data_paket->links()}} --}}
            </div>
        
        </div>
        <!-- Modal -->
    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="addNewLabel">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">                    
                        <form action="/paket/create"  method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="kdsatker">Kode Satker</label>
                                <input name="kdsatker" type="text" class="form-control" id="kdsatker" placeholder="Kode Satker">
                            </div>
                            <div class="form-group">
                                <label for="nmpaket">Nama Paket</label>
                                <input name="nmpaket" type="text" class="form-control" id="nmpaket" placeholder="Nama Paket">
                            </div>
                            <div class="form-group">
                                <label for="pagurmp">Pagu</label>
                                <input name="pagurmp" type="number" class="form-control" id="pagurmp" placeholder="Pagu">
                            </div>   
                            <div class="form-group{{$errors->has('keuangan') ? 'has-error' : ''}}">
                                <label for="keuangan">Penyerapan Keuangan</label>
                                <input name="keuangan" type="number" class="form-control" id="keuangan" placeholder="Penyerapan Keuangan">
                                @if($errors->has('keuangan'))
                                    <span class="help-block">{{$errors->first('keuangan')}}</span>
                                @endif
                            </div>                     
                            <div class="form-group{{$errors->has('progres_keu') ? 'has-error' : ''}}">
                                <label for="progres_keu">Progres Keuangan</label>
                                <input name="progres_keu" type="number" step="0.01" class="form-control" id="progres_keu" placeholder="Progres Keuangan">
                                @if($errors->has('progres_keu'))
                                    <span class="help-block">{{$errors->first('progres_keu')}}</span>
                                @endif
                            </div>
                            <div class="form-group{{$errors->has('progres_fisik') ? 'has-error' : ''}}">
                                <label for="progres_fisik">Progres Fisik</label>
                                <input name="progres_fisik" type="number" step="0.01" class="form-control" id="progres_fisik" placeholder="Progres Fisik">
                                @if($errors->has('progres_fisik'))
                                    <span class="help-block">{{$errors->first('progres_fisik')}}</span>
                                @endif
                            </div>    
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>            
                </div>
            </div>
        </div>
       
    </div>
    
</div>

@endsection