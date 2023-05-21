@extends('layouts.admin')
@section('title', 'SRC Syafira | Product Page')
@section('content')
    <div class="container">
        <h4>Halaman Tambah Data Pemasukan</h4>
        </p>
        <div class="col-lg-8">
            <div class="container">
                <form method="POST" action="{{ url('/supplier') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Supplier</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name">
                        @error('name')
                            <div class=invalid-feedback>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Nomor Kontak</label>
                        <input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact"
                            name="contact">
                        @error('contact')
                            <div class=invalid-feedback>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="select" class="form-label">Pilih Produk</label>
                        <select class="form-select @error('product_id') is-invalid @enderror"
                            aria-label="Default select example" name="product_id">
                            <option selected>--Jenis Produk--</option>
                            @foreach ($products as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('product_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stok</label>
                        <input type="number" class="form-control @error('stock') is-invalid @enderror" name="product_id">
                        @error('stock')
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
