@extends('layouts.admin')
@section('title', 'SRC Syafira | Edit Kategori Page')
@section('content')
    <div class="container">

        <a class="btn btn-dark mt-2" href="/category/">
            <i class="fa fa-chevron-circle-left"></i> Kembali</a>
        <br>
        <p>
        <h4>Halaman Edit Kategori</h4>
        </p>
        <div class="col-lg-8">
            <form method="post" action="/category/{{ $category->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Item</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ $category->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    @endsection
