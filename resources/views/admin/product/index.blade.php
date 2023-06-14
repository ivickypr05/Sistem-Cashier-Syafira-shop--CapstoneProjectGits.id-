@extends('layouts.admin')
@section('title', 'SRC Syafira | Produk Page')
@section('content')
    <main>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-tittle">
                        <center>Halaman Produk</center>
                    </h3>
                </div>
                <br>
                <nav>
                    <div class='d-flex justify-content-start'>
                        <a class="btn btn-success btn-md" href="/product/add"><i class="fa fa-plus"></i> Tambah
                            Data Baru</a>
                    </div>
                </nav>
                <br>
                <div class="card mb-4">
                    <div class="card-body">
                        <table class="table table-bordered table-striped mt-1" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Nama Produk</center>
                                    </th>
                                    <th>
                                        <center>Stok</center>
                                    </th>
                                    <th>
                                        <center>Harga Modal</center>
                                    </th>
                                    <th>
                                        <center>Harga Jual</center>
                                    </th>
                                    <th>
                                        <center>Foto</center>
                                    </th>
                                    <th>
                                        <center>Kategori</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($products as $item)
                                    <tr>
                                        <th>
                                            <center>{{ $no++ }}.</center>
                                        </th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->stock }}</td>
                                        <td>Rp.{{ number_format($item->cap_price) }},-</td>
                                        <td>Rp.{{ number_format($item->sell_price) }},-</td>
                                        <td><img src="{{ asset('storage/' . $item->photo) }}" width="70px"> </td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>
                                            <center>
                                                <a href="/product/{{ $item->id }}/edit"
                                                    class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="/product/{{ $item->id }}/delete" class="btn btn-xs btn-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')"><i
                                                        class="fas fa-trash"></i></a>
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
