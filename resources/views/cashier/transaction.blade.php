@extends('layouts.cashier')
@section('title', 'SRC Syafira | Riwayat Transaksi Page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Jumlah Harga</th>
                                    <th>Kembalian</th>
                                    <th>Aksi</th>
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
                                        <td>{{ number_format($item->total_price) }}</td>
                                        <td>{{ number_format($item->change) }}</td>
                                        <td>
                                            <a href="{{ url('history') }}/{{ $item->id }}" class="btn btn-primary"><i
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
    </div>
@endsection
