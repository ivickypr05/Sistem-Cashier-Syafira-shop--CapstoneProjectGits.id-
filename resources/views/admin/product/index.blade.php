@extends('layouts.admin')
@section('title', 'SRC Syafira | Product Page')
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3 class="card-tittle">
                    <center>Halaman Produk</center>
                </h3>
            </div>
            <div class="card-body">
                <nav>
                    <div class='justify-content-end'>
                        <a class="btn btn-success btn-md" href="/product/add"><i class="fa fa-plus"></i> Tambah
                            Data</a>
                    </div>
                </nav>

                <table class="table table-bordered table-striped mt-1">
                    <thread>
                        <tr>
                            <th colspan="9">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <center>No
                            </th>
                            <th>
                                <center>Nama
                            </th>
                            <th>
                                <center>Stok
                            </th>
                            <th>
                                <center>Modal
                            </th>
                            <th>
                                <center>Harga Jual
                            </th>
                            <th>
                                <center>Satuan
                            </th>
                            <th>
                                <center>Foto
                            </th>
                            <th>
                                <center>Kategori
                            </th>
                            <th>
                                <center>Aksi
                            </th>
                        </tr>
                    </thread>
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
                                <td>{{ $item->unit }}</td>
                                <td><img src="{{ asset('storage/' . $item->photo) }}" width="70px"> </td>
                                <td>{{ $item->category->name }}</td>
                                <td>
                                    <center>
                                        <a href="/product/{{ $item->id }}/edit" class="btn btn-xs btn-warning"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="/product/{{ $item->id }}/delete" class="btn btn-xs btn-danger"
                                            onclick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a>
                                    </center>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
