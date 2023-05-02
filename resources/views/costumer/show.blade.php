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
                    Master Data
                </li>
                <li class="separator">
                    <i class="fas fa-angle-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('costumer')}}">Data Costumer</a>
                </li>
                <li class="separator">
                    <i class="fas fa-angle-right"></i>
                </li>
                <li class="nav-item">
                    Detail Costumer : {{ $show['nama_costumer']}}
                </li>
            </ul>
        </div>
        {{-- baru tambah --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="page-title">Detail Costumer</h4>
                </div>
                <div class="card-body">
                <center>   
                    <h3 class="pt-3 page-title">Nama Costumer : {{ $show['nama_costumer']}}</h3>
                    <h3 class="pt-3 page-title">Alamat : {{ $show['alamat']}}</h3>
                    <h3 class="pt-3 page-title">Kota : {{ $show['kota']}}</h3>
                    <h3 class="pt-3 page-title">Email : {{ $show['email']}}</h3>
                    <h3 class="pt-3 page-title">No Hp : {{ $show['hp']}}</h3>
                    <h3 class="pt-3 page-title">Perusahaan : {{ $show['perusahaan']}}</h3>
                </center>
                </div>               
            </div>
        </div>
    </div>
</div>
    
@endsection