@extends('layouts.admin')
@section('title', 'SRC Syafira | Category Page')
@section('content')
        <a class="btn btn-dark mt-2" href="/category/">
            <i class="fa fa-chevron-circle-left"></i> Kembali</a>
                <br><br>
                <h4>Halaman Tambah Kategori</h4>
                <div class="col-lg-8">
                    <form action="{{url('/category')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Item</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name">
                            @error('name')
                                <div class=invalid-feedback>
                                    {{ $message }}
                                </div>
                            </div>
                        </div>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-success">Selesai</button>
                    </form>
                </div>
@endsection
