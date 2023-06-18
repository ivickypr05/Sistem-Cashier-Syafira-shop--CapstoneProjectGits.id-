@extends('layouts.cashier')
@section('title', 'SRC Syafira | Keranjang Page')
@section('content')
<style>
    
</style>
    <div class="container mt-4 px-2">
        <div class="table-responsive mt-5">
            <table class="table table-responsive table-striped table-bordered text-center">
                <thead>
                    <tr>
                        {{-- <th scope="col" colspan="2"></th> --}}
                        <th>No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Jumlah Pesanan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Ubah</th>
                        <th scope="col">Hapus</th>
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
                                    <button type="submit" class="btn btn-warning"><i class=" fas fa-edit"></i></button>
                                </td>
                        </form>
                        <td>
                            <form action="cart/{{ $item->id }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-danger"
                                    onclick="event.preventDefault(); deleteConfirmation('{{ $item->id }}');">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <tr>
                <td>
                    <h4> Total Bayar: {{ number_format($total) }},-</h4>
                </td>
                <td>
                    @if ($total > 0)
                        <form action="{{ url('/checkout') }}" method="POST">
                            @csrf
                            <div class="mt-3 mb-3">
                                <label for="payment" class="form-label">Masukan Uang Pembayaran</label>
                                <input type="number" class="form-control" placeholder="Rp" name="payment" min="1"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i>
                                Check Out</button>
                        </form>
                    @endif
                </td>
            </tr>
        </div>
    </div>
    <script>
        function deleteConfirmation(itemId) {
            Swal.fire({
                title: 'Apakah yakin ingin menghapus?',
                text: "Item yang terhapus tidak bisa dikembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan tindakan penghapusan
                    window.location.href = "/cart/" + itemId + "/delete";
                }
            });
        }
    </script>
@endsection
