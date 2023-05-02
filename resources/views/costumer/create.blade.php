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
                <a href="#">Data Artikel</a>
            </li>
            <li class="separator">
                <i class="fas fa-angle-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tambah Data Artikel</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Data Costumer</div>
                </div>
                <form action="{{ route('costumer.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Nama Costumer</label>
                                            <input type="text" value="{{ old('nama_costumer')}}" class="form-control" name="nama_costumer" >
 
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
                                            <input type="text" value="{{ old('alamat')}}" class="form-control" name="alamat" >
 
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
                                            <input type="text" value="{{ old('kota')}}" class="form-control" name="kota" >
 
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
                                            <input type="text" value="{{ old('email')}}" class="form-control" name="email" >
 
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
                                            <input type="text" value="{{ old('hp')}}" class="form-control" name="hp" >
 
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
                                            <input type="text" value="{{ old('perusahaan')}}" class="form-control" name="perusahaan" >
 
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection