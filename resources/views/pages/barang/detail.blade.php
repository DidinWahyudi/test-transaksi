@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Barang</a></li>
                        <li class="breadcrumb-item active">Detail Barang</li>
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
                            <h3 class="card-title">Detail Barang</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ $barang->nama_barang }}" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ $barang->jenis_barang }}" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Stok</label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ $barang->stok }} Pcs" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
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
