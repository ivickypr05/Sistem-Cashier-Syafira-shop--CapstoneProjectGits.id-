@extends('layouts.cashier')
@section('title', 'SRC Syafira | Riwayat Transaksi Page')
@section('content')
    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                <br>
                <div class="table-responsive">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nomor Invoice</th>
                                <th>Total Harga</th>
                                <th>Total Pembayaran</th>
                                <th>Total Kembalian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($transactions as $item)
                                <tr>
                                    <th>
                                        <center>{{ $no++ }}.</center>
                                    </th>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->invoice_nomor }}</td>
                                    <td>Rp{{ number_format($item->total_price) }}</td>
                                    <td>{{ number_format($item->payment) }}</td>
                                    <td>Rp{{ number_format($item->payment - $item->total_price) }}</td>
                                    <td>
                                        <a href="{{ url('detail') }}/{{ $item->id }}" class="btn btn-primary"><i
                                                class="fa fa-file-text-o"></i> Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
