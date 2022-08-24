@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Barang</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success btn-sm" href="#">Tambah Baru</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered datatable">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Stok</th>
                                    <th>Jenis Barang</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($barang as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->stok }} Pcs</td>
                                    <td>{{ $item->jenis_barang }}</td>
                                    <td>
                                        <form action="#" method="Post">
                                            <a class="btn btn-success btn-sm"
                                                href="#">Edit</a>
                                            <a class="btn btn-warning btn-sm"
                                                href="#"><i class="bi bi-eye"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
