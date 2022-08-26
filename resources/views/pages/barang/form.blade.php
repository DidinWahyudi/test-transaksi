@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@if (@$barang->exists)
                        Edit
                        @php
                        $aksi = 'Edit';
                        @endphp
                        @else
                        Tambah
                        @php
                        $aksi = 'Tambah';
                        @endphp
                        @endif
                        Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Barang</a></li>
                        <li class="breadcrumb-item active">Form
                            @if (@$barang->exists)
                            Edit

                            @else
                            Tambah

                            @endif
                            Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form @if (@$barang->exists)
                                Edit
                                @else
                                Tambah
                                @endif
                                Barang</li>
                            </h3>
                        </div>
                        @if (@$barang->exists)

                        <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                            action="{{ route('barang.update', $barang) }}">

                            @method('put')

                            @else
                            <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                                action="{{ route('barang.store') }}">
                        @endif
                            {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nama_barang">Nama Barang</label>
                                                <input type="text" class="form-control" id="nama_barang"
                                                    name="nama_barang" placeholder="Nama Barang"
                                                    value="{{ old('nama_barang', @$barang->nama_barang) }}">
                                                @if ($errors->has('nama_barang'))
                                                <span class="text-danger">{{ $errors->first('nama_barang') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="jenis_barang">Jenis Barang</label>
                                                <input type="text" class="form-control" id="jenis_barang"
                                                    name="jenis_barang" placeholder="Jenis Barang"
                                                    value="{{ old('jenis_barang', @$barang->jenis_barang) }}">
                                                @if ($errors->has('jenuis_barang'))
                                                <span class="text-danger">{{ $errors->first('jenis_barang') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="stok">Jumlah Stok</label>
                                                <input type="text" class="form-control" id="stok"
                                                    name="stok" placeholder="Stok"
                                                    value="{{ old('stok', @$barang->stok) }}">
                                                @if ($errors->has('stok'))
                                                <span class="text-danger">{{ $errors->first('stok') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"> {{ $aksi }}</button>
                                    <a href="{{ route('barang') }}" class="btn btn-outline-danger">
                                        Kembali</a>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
