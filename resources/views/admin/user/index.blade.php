@extends('layouts.admin')
@section('title', 'SRC Syafira | Pengguna Page')
@section('content')
    <main>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-tittle">
                        <center>Halaman Pengguna</center>
                    </h3>
                </div>
                <br>
                <nav>
                    <div class='d-flex justify-content-start'>
                        <a class="btn btn-success btn-md" href="/user/add"><i class="fa fa-plus"></i> Tambah
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
                                        <center>Nama Pengguna</center>
                                    </th>
                                    <th>
                                        <center>Email</center>
                                    </th>
                                    <th>
                                        <center>Role</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($users as $item)
                                    <tr>
                                        <th>
                                            <center>{{ $no++ }}.</center>
                                        </th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>
                                            <center>
                                                <a href="/user/{{ $item->id }}/edit"
                                                    class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="/user/{{ $item->id }}/delete" class="btn btn-xs btn-danger"
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
