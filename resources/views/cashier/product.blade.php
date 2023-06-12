@extends('layouts.cashier')
@section('title', 'SRC Syafira | Produk')
@section('content')
    <div class="container row mt-4">
        @foreach ($products as $items)
            {{-- col --}}
            <div class="mt-1 mb-5 col-md-3 col-15">
                {{-- card --}}
                <div class="card card-deck">
                    <img src="{{ asset('storage/' . $items->photo) }}" class="card-img-top" width="100px" height="200px" alt="...">
                    <div class="card-body">

                        <h5 class="card-title text-danger">{{ $items->name }}</h5>

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
                                <div class="row col-7 ">
                                    @csrf
                                    <label for="amount" class="form-label text-muted">Jumlah beli</label>
                                    <input type="number" name="amount" value="1" min="1" required>
                                </div>
                                <div class="row mt-2">
                                    <button type="submit" class="btn btn-primary ms-auto" role="button"><i
                                            class="fa-solid fa-cart-plus"></i> Masukkan Keranjang</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                {{-- end card --}}
            </div>
            {{-- end col --}}
        @endforeach
    </div>
    {{-- end row --}}
@endsection
