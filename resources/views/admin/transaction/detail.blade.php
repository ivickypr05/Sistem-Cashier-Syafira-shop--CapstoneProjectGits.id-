@extends('layouts.admin')
@section('title', 'SRC Syafira | Transaksi Detail Page')
@section('content')
    <main>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-tittle">
                        <center>Halaman Detail Transaksi</center>
                    </h3>
                </div>
                <div class="mt-2 d-flex justify-content-center">
                    <button class="cetak btn btn-primary"><i class="fa-solid fa-print"></i> Cetak</button>
                </div>
                <div class="card mt-2 mb-4 cetak-area">
                    <div class="card-body">
                        <table class="col-4" class="table table-bordered table-striped mt-1">
                            <tr>
                                <td colspan="2">#{{ $transactions->invoice_nomor }}</td>
                            </tr>
                            <tr>
                                <td>Nama Kasir</td>
                                <td>: {{ $transactions->user->name }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Transaksi</td>
                                <td>: {{ $transactions->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td>: Rp{{ number_format($transactions->total_price) }}</td>
                            </tr>
                            <tr>
                                <td>Bayar Cash</td>
                                <td>: Rp{{ number_format($transactions->payment) }}</td>
                            </tr>
                            <tr>
                                <td>Kembalian</td>
                                <td>: Rp{{ number_format($transactions->payment - $transactions->total_price) }}</td>
                            </tr>
                            <tr>
                                <td>Total Keuntungan</td>
                                <td>: Rp{{ number_format($transactions->total_profit) }}</td>
                            </tr>
                        </table>
                        <br>
                        <table class="table table-bordered table-striped mt-1">
                            <thead>
                                <tr>
                                    <th>
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Nama Produk</center>
                                    </th>
                                    <th>
                                        <center>Harga Modal</center>
                                    </th>
                                    <th>
                                        <center>Harga Jual</center>
                                    </th>
                                    <th>
                                        <center>Kuantitas</center>
                                    </th>
                                    <th>
                                        <center>Subtotal Harga</center>
                                    </th>
                                    <th>
                                        <center>Subtotal Keuntungan</center>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions->detail_transaction as $item)
                                    <?php $no = 1; ?>
                                    <tr>
                                        <th>
                                            <center>{{ $no++ }}.</center>
                                        </th>
                                        <td>{{ $item->name }}</td>
                                        <td>Rp{{ number_format($item->cap_price) }}</td>
                                        <td>Rp{{ number_format($item->sell_price) }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>Rp{{ number_format($item->sell_price * $item->amount) }}</td>
                                        <td>Rp{{ number_format($item->sell_price * $item->amount - $item->cap_price * $item->amount) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
