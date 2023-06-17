@extends('layouts.admin')
@section('title', 'SRC Syafira | Edit Pengguna Page')
@section('content')
    <div class="container">

        <a class="btn btn-dark mt-2" href="/user/">
            <i class="fa fa-chevron-circle-left"></i> Kembali</a>
        <br>
        <p>
        <h4>Halaman Tambah Data Pengguna</h4>
        </p>
        <div class="col-lg-8">
            <form method="post" action="/user/{{ $user->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ $user->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ $user->email }}">
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
                    <small>*Kosongkan jika tidak ingin ganti password</small>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>

        <script>
            function showPreview(event) {
                var input = event.target;
                var reader = new FileReader();

                reader.onload = function() {
                    var imgElement = document.getElementById("user-image");
                    imgElement.src = reader.result;
                };

                reader.readAsDataURL(input.files[0]);
            }

            var photoInput = document.getElementById("photo");
            photoInput.addEventListener("change", showPreview);
        </script>

    @endsection
