@extends('layouts.admin')

@section('title', 'SRC Syafira | Admin Page')
@section('content')
<head>
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@600&family=Merriweather+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<style>
    body{background-image: url("/assets/img/bgblur.png");}
    .h1 .p {
        background-color: rgb(146, 140, 140);
        font-family: 'Familjen Grotesk', sans-serif;
    }
</style>
    <section data-bs-version="5.1" class="header7 cid-sUp808fGej" id="aheader7-2 mt-3">
        <div class="mbr-overlay" style="opacity: 1; background-color: rgb(255, 255, 255);"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 mt-5">

                    <h1 class="mbr-section-title mbr-fonts-style text-dark align-center display-1"><strong>Selamat datang
                            kembali
                            Admin "SRC Syafira"</strong></h1>
                    <p class="mbr-text mbr-fonts-style-4 align-center text-dark display-5">
                        <br>
                        Silahkan Tambah, Ubah, dan Delete data sesuai yang admin inginkan, Semoga makin banyak Transaksinya
                        >.< </p>
                            {{-- <div class="mbr-section-btn align-center"><a class="btn btn-danger display-5"
                                    href="/">Shop
                                    Now<span class="mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn"
                                        style="font-size: 20px"></span></a></div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
