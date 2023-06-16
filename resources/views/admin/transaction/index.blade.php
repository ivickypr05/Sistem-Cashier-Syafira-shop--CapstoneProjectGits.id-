@extends('layouts.admin')
@section('title', 'SRC Syafira | Riwayat Transaksi Page')
@section('content')
    <main>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-tittle">
                        <center>Halaman List Transaksi</center>
                    </h3>
                </div>

                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered table-responsive table-striped mt-1" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Tanggal Transaksi</center>
                                    </th>
                                    <th>
                                        <center>Nama Kasir</center>
                                    </th>
                                    <th>
                                        <center>Invoice</center>
                                    </th>
                                    <th>
                                        <center>Total Harga</center>
                                    </th>
                                    <th>
                                        <center>Keuntungan</center>
                                    </th>
                                    <th>
                                        <center>Action</center>
                                    </th>

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
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->invoice_nomor }}</td>
                                        <td>Rp{{ number_format($item->total_price) }}</td>
                                        <td>Rp{{ number_format($item->total_profit) }}</td>
                                        <td colspan="2"><a class="btn btn-primary"
                                                href="/transaction_detail/{{ $item->id }}" role="button">Detail</a>
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
