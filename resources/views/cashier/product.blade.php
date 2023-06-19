@extends('layouts.cashier')
@section('title', 'SRC Syafira | Produk')
@section('content')

    <style>
        .card {
            font-family: 'Familjen Grotesk', sans-serif;


            &:hover,
            &:focus-within {
                transform: translatey(-3px);
                box-shadow: 0 1rem 1rem rgb(0, 0, 0);
                transform: translateY(-1rem);
                backdrop-filter: blur(1.5rem);
            }

        }

        .card-body .h6 {
            position: relative;
            width: 222px;
            height: 500px;
            background: rgba(255, 255, 255, 0.05);
            margin: 5px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(10px);
            font-size: 20px;
        }
    </style>

    <div class="d-flex justify-content-center mt-2 mb-2 ">
        <!-- Navbar Search-->
        <div class="col-6">
            <form class="" action="/product/search" method="GET">
                <div class="input-group">
                    <input class="form-control mr-2" type="search" placeholder="Search by name" name="keyword"
                        value="{{ $keyword }}" />
                    <div class="input-group-append">
                        <button class="btn btn-light btn-outline-dark" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container d-flex justify-content-center row mt-5">
        @foreach ($products as $items)
            {{-- col --}}
            <div class="mt-1 mb-5 col-md-3 col-10">
                {{-- card --}}
                <div class="card card-deck">
                    <img src="{{ asset('storage/' . $items->photo) }}" class="card-img-top" width="100px" height="200px"
                        alt="...">
                    <div class="card-body">

                        <h6 class="card-title text-danger">{{ $items->name }}</h6>

                        @if ($items->category == null)
                            <h6 class="card-subtitle text-muted"><i>-Uncategory</i></h6>
                        @else
                            <h6 class="card-subtitle text-muted"><i>Kategori : {{ $items->category->name }}</i></h6>
                        @endif
                        <hr>
                        <h6 class="card-text md-5 "><strong>Sisa Stok : [ {{ $items->stock }} ]</strong></h6>
                        <h5 class="d-flex text-success"><span
                                class="ms-auto">Rp{{ number_format($items->sell_price) }}</span>
                        </h5>
                        <p>
                        <form action="/addtocart/{{ $items->id }}" method="post">
                            @csrf
                            <div class="row mt-3 justify-content-center">
                                {{-- <input type="hidden" name="product_id" value="{{ $items->id }}"> --}}
                                <div class="row col-8 ">
                                    @csrf
                                    <label for="amount" class="form-label text-muted">Jumlah beli</label>
                                    <input type="number" name="amount" value="1" min="1" required>
                                </div>
                                <div class="row mt-2">
                                    <button type="submit" class="btn btn-primary ms-auto" role="button"><i
                                            class="fa-solid fa-cart-plus"></i> Masuk Keranjang</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection
