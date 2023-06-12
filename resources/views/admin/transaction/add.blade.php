@extends('layouts.admin')
@section('title', 'SRC Syafira | Product Page')
@section('content')
    <div class="container">

        <a class="btn btn-dark mt-2" href="/product/">
            <i class="fa fa-chevron-circle-left"></i> Kembali</a>
        <br>
        <p>
        <h4>Halaman Tambah Data Produk</h4>
        </p>
        <div class="col-lg-8">
            <div class="container">
                <form method="POST" action="{{ url('/product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name">
                        @error('name')
                            <div class=invalid-feedback>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stok</label>
                        <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock"
                            name="stock">
                        @error('stock')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cap_price" class="form-label">Modal</label>
                        <input type="number" class="form-control @error('cap_price') is-invalid @enderror" id="cap_price"
                            name="cap_price">
                        @error('cap_price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sell_price" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control @error('sell_price') is-invalid @enderror" id="sell_price"
                            name="sell_price">
                        @error('sell_price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo"
                            name="photo">
                        @error('photo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="select" class="form-label">Pilih Kategori</label>
                        <select class="form-select @error('category_id') is-invalid @enderror"
                            aria-label="Default select example" name="category_id">
                            <option selected>--Kategori--</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        @endsection
