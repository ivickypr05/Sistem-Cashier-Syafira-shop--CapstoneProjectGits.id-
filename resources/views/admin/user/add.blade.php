@extends('layouts.admin')
@section('title', 'SRC Syafira | Tambah Pengguna Page')
@section('content')
    <div class="container">

        <a class="btn btn-dark mt-2" href="/user/">
            <i class="fa fa-chevron-circle-left"></i> Kembali</a>
        <br>
        <p>
        <h4>Halaman Tambah Data Pengguna</h4>
        </p>
        <div class="col-lg-8">
            <div class="container">
                <form method="POST" action="{{ url('/user') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name">
                        @error('name')
                            <div class=invalid-feedback>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" aria-label="Default select example" name="role">
                            <option hidden>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="cashier">Kasir</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
