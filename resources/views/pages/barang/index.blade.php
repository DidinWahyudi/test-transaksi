@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Barang</a></li>
                        <li class="breadcrumb-item active">List Barang</li>
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
                        <div class="card-header">List Barang</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="btn btn-success" href="{{ route('barang.create') }}">Tambah Baru</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Stok</th>
                                                <th>Jenis Barang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($barang as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->stok }} Pcs</td>
                                                <td>{{ $item->jenis_barang }}</td>
                                                <td>
                                                    <form action="{{ route('barang.destroy', $item->id) }}" method="Post">
                                                        <a class="btn btn-success btn-xs" href="{{ route('barang.edit', $item->id) }}">Edit</a>
                                                        <a class="btn btn-primary btn-xs" href="{{ route('barang.show', $item->id) }}"><i class="bi bi-eye"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-xs"><i
                                                                class="bi bi-trash"></i></button>
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
