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
                        <li class="breadcrumb-item active">Form Tambah Transaksi</li>
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
                            <h3 class="card-title">Form Transaksi Tanggal {{ date('d F Y') }}</h3>
                        </div>

                        <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                            action="{{ route('transaksi.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Pilih Barang</label>
                                            <select class="form-control" name="barang_id" id="barang_id">
                                                <option selected="true" disabled="disabled" value="">Pilih Barang</option>
                                                @foreach ($barang as $item)
                                                <option value="{{ $item->id }}" data-barang="{{ $item->stok }}">{{ $item->nama_barang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="stok">Stok Barang</label>
                                            <input type="text" class="form-control" id="stok"
                                                name="stok" placeholder="Stok" readonly>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="stok">Jumlah Yang Dibeli</label>
                                            <input type="number" class="form-control" id="jumlah"
                                                name="jumlah" placeholder="Jumlah">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
                                    <a href="{{ route('transaksi') }}" class="btn btn-outline-danger">
                                        Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#barang_id').on('change', function() {
          const selected = $(this).find('option:selected');
          const stok = selected.data('barang');

          $("#stok").val(stok);
        });
      });
</script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#modalForm" ).validate({
  rules: {
    jumlah: "required",
    jumlah: {
        required: true,
      max: "#stok"
    }
  },
  messages: {

        jumlah: {
            required: "Masukan Jumlah",
            max: "Jumlah melebihi stok yang ada",
        }
    }
});
</script>
    @endsection
