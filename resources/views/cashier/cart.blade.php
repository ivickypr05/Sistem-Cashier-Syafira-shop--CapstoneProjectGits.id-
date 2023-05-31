@extends('layouts.cashier')
@section('title', 'SRC Syafira | Keranjang')
@section('content')
    <style>
        body {
            background-image: url('https://media.istockphoto.com/id/511661914/photo/white-marble-patterned-texture-background.webp?b=1&s=170667a&w=0&k=20&c=K77fw3FThWPhj3iuZRpl5ZOCzXfpT1HmwuGxCIOKt2w=');
        }
    </style>
    <div class="container mt-4 px-2">
        <div class="table-responsive mt-5">
            <table class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        {{-- <th scope="col" colspan="2"></th> --}}
                        <th>No</th>
                        <th scope="col">Pict Product</th>
                        <th scope="col">Product</th>
                        <th scope="col">Category</th>
                        <th scope="col">Jumlah Pesanan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($carts as $item)
                        <form action="{{ url("/cart/$item->id/edit") }}" method="POST">
                            @csrf
                            @method('PUT')
                            <tr>
                                <td><strong> {{ $no++ }} </strong></td>
                                <td><img src="{{ asset('storage/' . $item->product->photo) }}" width="70px"> </td>
                                {{-- <th colspan="2"><input class="form-check-input" type="checkbox"></th> --}}
                                <td><strong>{{ $item->product->name }}</strong></td>
                                <td>{{ $item->product->category->name }}</td>
                                <td>
                                    <input type="number" style="width:100px !important" value="{{ $item->amount }}"
                                        class="form-control w-10" size="20" name="amount", min="1" required>
                                </td>
                                <td>Rp. {{ number_format($item->product->sell_price) }},-</td>
                                <td>Rp. {{ number_format($item->product->sell_price * $item->amount) }},-</td>
                                <td>
                                    <button type="submit" class="btn btn-warning"><i class=" fas fa-edit"></i>Edit</button>
                                    <a href="cart/{{ $item->id }}/delete" class="btn btn-xs btn-danger"
                                        onclick="return confirm('yakin mau hapus?');"><i class="fas fa-trash"></i>Delete</a>
                                </td>
                        </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container-fluid bg-light border-responsive rounded py-1 mx-1">
                <tr>
                    <td><b> Total order price : {{ number_format($total) }},-</b></td>
                    <td>
                        <a href="{{ url('/transactions') }}" class="btn btn-success"
                            onclick="return confirm('Anda yakin akan Check Out ?');">
                            <i class="fa fa-shopping-cart"></i> Check Out
                        </a>
                    </td>
                </tr>
            </div>
        </div>

    </div>
@endsection
