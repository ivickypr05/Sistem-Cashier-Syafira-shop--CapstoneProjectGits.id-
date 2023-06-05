@extends('layouts.cashier')
@section('title', 'SRC Syafira | Detail Riwayat Transaksi Page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-4">
                <div class="card mt-2">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                        <p align="right">Tanggal Pesan : {{ $transaction->created_at }}</p>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <center>


                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Sub Total</th>

                                    </center>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($detail_transaction as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->photo) }}" width="100" alt="...">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td> Rp{{ number_format($item->sell_price) }}</td>
                                        <td> Rp{{ number_format($item->amount * $item->sell_price) }}</td>

                                    </tr>
                                @endforeach


                                <tr>
                                    <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                    <td align="right"><strong>Rp.
                                            {{ number_format($transaction->total_price) }}</strong>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="5" align="right"><strong>Total Pembayaran :</strong></td>
                                    <td align="right"><strong>Rp.
                                            {{ number_format($transaction->payment) }}</strong>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="5" align="right"><strong>Kembalian :</strong></td>
                                    <td align="right"><strong>Rp.
                                            {{ number_format($transaction->payment - $transaction->total_price) }}</strong>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
