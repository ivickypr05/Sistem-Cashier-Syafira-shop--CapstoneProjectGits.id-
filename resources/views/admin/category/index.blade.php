@extends('layouts.admin')
@section('title', 'SRC Syafira | Category Page')
@section('content')
    <div class="row">
        <!-- <div class="col-md-4"> -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-tittle">
                    <center>Halaman Kategori</center>
                </h3>
            </div>
            <div class="card-body">
                <nav>
                    <div class='justify-content-end'>
                        <a class="btn btn-success btn-md" href="/category/add"><i class="fa fa-plus"></i> Tambah
                            Data Baru</a>
                    </div>
                </nav>

                <table class="table table-bordered table-striped mt-1">
                    <thread>
                        <tr>
                            <th>
                                <center>No
                            </th>
                            <th>
                                <center>Nama Kategori
                            </th>
                            <th>
                                <center>Aksi
                            </th>
                        </tr>
                    </thread>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($categories as $item)
                            <tr>
                                <th>
                                    <center>{{ $no++ }}.</center>
                                </th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <center>
                                        <a href="/category/{{ $item->id }}/edit" class="btn btn-xs btn-warning"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a href="/category/{{ $item->id }}/delete" class="btn btn-xs btn-danger"
                                            onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data?');"><i class="fas fa-trash"></i>Hapus</a>
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
