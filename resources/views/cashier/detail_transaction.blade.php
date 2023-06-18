@extends('layouts.cashier')
@section('title', 'SRC Syafira | Detail Riwayat Transaksi Page')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-4">
                <div class="card mt-2">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                        {{-- <p align="right">Tanggal Pesan : {{ $transaction->created_at }}</p> --}}
                        <div class="mt-3 d-flex justify-content-start">
                            <button class="cetak btn btn-primary"><i class="fa-solid fa-print"></i> Cetak</button>
                        </div>
                        <div class="card mt-4 mb-4 cetak-area">
                            <div class="card-body">
                                <table class="col-4" class="table table-bordered table-striped mt-1">
                                    <tr>
                                        <td colspan="2">#{{ $transaction->invoice_nomor }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kasir</td>
                                        <td>: {{ $transaction->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Transaksi</td>
                                        <td>: {{ $transaction->created_at }}</td>
                                    </tr>
                                </table>
                                <br>
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
                                                    <img src="{{ asset('storage/' . $item->photo) }}" width="100"
                                                        alt="...">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td> Rp{{ number_format($item->sell_price) }}</td>
                                                <td> Rp{{ number_format($item->amount * $item->sell_price) }}</td>

                                            </tr>
                                        @endforeach


                                        <tr>
                                            <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                            <td align="right"><strong>Rp
                                                    {{ number_format($transaction->total_price) }}</strong>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="5" align="right"><strong>Total Pembayaran :</strong></td>
                                            <td align="right"><strong>Rp
                                                    {{ number_format($transaction->payment) }}</strong>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="5" align="right"><strong>Kembalian :</strong></td>
                                            <td align="right"><strong>Rp
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var tombolCetak = document.querySelector('.cetak');
                tombolCetak.addEventListener('click', function() {
                    var elemenCetak = document.querySelector('.cetak-area');
                    var printWindow = window.open('', '_blank');
                    printWindow.document.open();
                    printWindow.document.write('<html><head><title>Cetak</title></head><body>');
                    printWindow.document.write(elemenCetak.innerHTML);
                    printWindow.document.write('</body></html>');
                    printWindow.document.close();
                    printWindow.print();
                    printWindow.close();
                });
            });
        </script>
