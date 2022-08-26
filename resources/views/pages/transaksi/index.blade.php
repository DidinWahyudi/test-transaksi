@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                        <li class="breadcrumb-item active">List Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p style="margin-bottom: 0px;"><i class="icon fas fa-check"></i>{{ $message }}</p>

                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">List Transaksi Per Tanggal {{ date('d F Y') }}</div>
                        <div class="card-body">
                            <form action="{{ route('filter') }}" action="GET">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="btn btn-success" href="{{ route('transaksi.create') }}">Transaksi
                                            Baru</a>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input type="date" class="form-control float-right" id="dari" name="dari">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input type="date" class="form-control float-right" id="sampai"
                                                name="sampai">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-primary btn-block">Filter
                                            Transaksi</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Jenis Barang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($transaksi as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ date('d F Y', strtotime($item->tanggal_transaksi)) }}</td>
                                                <td>{{ $item->barang->nama_barang }}</td>
                                                <td>{{ $item->jumlah }} Pcs</td>
                                                <td>{{ $item->barang->jenis_barang }}</td>
                                                <td>
                                                    <form action="{{ route('transaksi.destroy', $item->id) }}"
                                                        method="Post">
                                                        {{-- <a class="btn btn-success btn-xs"
                                                            href="{{ route('transaksi.edit', $item->id) }}">Edit</a>
                                                        --}}
                                                        <a class="btn btn-primary btn-xs"
                                                            href="{{ route('transaksi.show', $item->id) }}"><i
                                                                class="bi bi-eye"></i> Detail Transaksi</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        {{-- <button type="submit" class="btn btn-danger btn-xs"><i
                                                                class="bi bi-trash"></i></button> --}}
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
