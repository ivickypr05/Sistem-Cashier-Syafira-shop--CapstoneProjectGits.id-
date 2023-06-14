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
                <button class="cetak btn btn-primary">Cetak</button>
                <div class="card mt-4 mb-4 cetak-area">
                    <div class="card-body">
                        <table class="col-4" class="table table-bordered table-striped mt-1">
                            <tr>
                                <td colspan="2">#{{ $transactions->invoice_nomor }}</td>
                            </tr>
                            <tr>
                                <td>Nama Kasir</td>
                                <td>{{ $transactions->user->name }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{ $transactions->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>{{ $transactions->total_price }}</td>
                            </tr>
                            <tr>
                                <td>Bayar</td>
                                <td>{{ $transactions->payment }}</td>
                            </tr>
                            <tr>
                                <td>Kembali</td>
                                <td>{{ $transactions->payment - $transactions->total_price }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-striped mt-1" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Nama Produk</center>
                                    </th>
                                    <th>
                                        <center>Harga</center>
                                    </th>
                                    <th>
                                        <center>Kuantitas</center>
                                    </th>
                                    <th>
                                        <center>Subtotal Harga</center>
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
                                        <td>Rp.{{ number_format($item->sell_price) }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>Rp.{{ number_format($transactions->total_price * $item->amount) }},-</td>
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
