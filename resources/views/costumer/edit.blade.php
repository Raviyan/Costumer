@extends('template.main')
@section('konten')
<div class="page-inner">
    <div class="page-header">
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="fas fa-angle-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Master Data</a>
            </li>
            <li class="separator">
                <i class="fas fa-angle-right"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('costumer')}}">Data Artikel</a>
            </li>
            <li class="separator">
                <i class="fas fa-angle-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Edit Data Artikel</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Data : {{ $edit['nama_costumer']}}</div>
                </div>
                <form action="{{ route('costumer.update', $edit['id']) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Nama Costumer</label>
                                                <input type="text" value="{{ $edit['nama_costumer']}}" class="form-control" name="nama_costume" >
     
                                                @error('nama_costumer')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
     
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Alamat</label>
                                                <input type="text" value="{{ $edit['alamat']}}" class="form-control" name="alama" >
     
                                                @error('alamat')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
     
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Kota</label>
                                                <input type="text" value="{{ $edit['kota']}}" class="form-control" name="kot" >
     
                                                @error('kota')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
     
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Email</label>
                                                <input type="text" value="{{ $edit['email']}}" class="form-control" name="emai" >
     
                                                @error('email')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
     
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Hp</label>
                                                <input type="text" value="{{ $edit['hp']}}" class="form-control" name="h" >
     
                                                @error('hp')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
     
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Perusahaan</label>
                                                <input type="text" value="{{ $edit['perusahaan']}}" class="form-control" name="perusahaa" >
     
                                                @error('perusahaan')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
     
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <center>
                        <button type="submit" class="btn btn-secondary"><i class="icon-refresh"></i> Update</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection