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
        </ul>
    </div>
 
    {{-- buat ngecek apakah variabel status ada nilainya atau gak --}}
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- <div class="card-title float-left">Data Artikel</div> --}}
                    <h4 class="page-title float-left">Data Artikel</h4>
                    <a href="{{ route('costumer.create')}}">
                        <button class="btn btn-md btn-primary btn-round float-right">
                        <i class="fas fa-plus-circle"></i> Tambah
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width:16%">Nama Costumer</th>
                                <th style="width:10%">Alamat</th>
                                <th style="width:8%">Kota</th>
                                <th style="width:5%">Email</th>
                                <th style="width:5%">No Hp</th>
                                <th style="width:10%">Perusahaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- lakukan looping data disini --}}
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->nama_costumer}} </td>
                                <td>{{ $item->alamat}} </td>
                                <td>{{ $item->kota}} </td>
                                <td>{{ $item->email}} </td>
                                <td>{{ $item->hp}} </td>
                                <td>{{ $item->perusahaan}} </td>
                                <td>
                                    {{-- cara biar data/ikon yg dipilih berdasarkan id di db --}}
                                    <a href="{{ route('costumer.show',$item->id)}}" style="text-decoration: none">
                                    <button type="button" class="btn btn-icon btn-round btn-info">
                                        <i class="fa fa-info-circle"></i>
                                    </button> &nbsp;
                                </a>
                                <a href="{{ route('costumer.edit',$item->id)}}" style="text-decoration: none">
                                    <button type="button" class="btn btn-icon btn-round btn-secondary">
                                        <i class="fas fa-edit"></i>
                                    </button> &nbsp;
                                </a>
                                <a href="{{ route('costumer.destroy', $item->id)}}">
                                    <button onclick="return confirm('Yakin data {{$item ['judul_artikel']}} dihapus?')" type="button" class="btn btn-icon btn-round btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                                </td>
                            </tr>
                            @php
                                $no++;
                            @endphp
                            @endforeach
 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection