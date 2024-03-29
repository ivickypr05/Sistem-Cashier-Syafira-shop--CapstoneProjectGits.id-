@extends('layouts.admin')
@section('title', 'SRC Syafira | Produk Masuk Page')
@section('content')
    <style>
        body {
            background-color:
        }
    </style>
    <main>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-tittle">
                        <center>Halaman Pemasukan Produk</center>
                    </h3>
                </div>
                <br>
                <nav>
                    <div class='d-flex justify-content-start'>
                        <a class="btn btn-success btn-md" href="/supplier/add"><i class="fa fa-plus"></i> Tambah
                            Data Baru</a>
                    </div>
                </nav>
                <br>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered table-responsive table-striped mt-1" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Nama Supplier</center>
                                    </th>
                                    <th>
                                        <center>Nomor Kontak</center>
                                    </th>
                                    <th>
                                        <center>Nama Produk</center>
                                    </th>
                                    <th>
                                        <center>Jumlah Stok</center>
                                    </th>
                                    <th>
                                        <center>Waktu Transaksi</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($suppliers as $item)
                                    <tr>
                                        <th>
                                            <center>{{ $no++ }}.</center>
                                        </th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <center>
                                                <a href="/supplier/{{ $item->id }}/edit"
                                                    class="btn btn-xs btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
