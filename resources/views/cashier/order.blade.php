@extends('layouts.cashier')
@section('title', 'SRC Syafira | Pembayaran Page')
@section('content')
    <a class="btn btn-dark mt-2" href="/cart">
        <i class="fa fa-chevron-circle-left"></i> Kembali</a>
    <br><br>
    <h4>Silahkan masukan Jumlah Uang yang dibayar</h4>
    <div class="col-lg-8">
        <form action="{{ url('/transaction') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="payment" class="form-label">Jumlah Uang</label>
                <input type="number" name="payment" min="1" required>
            </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Bayar</button>
    </form>
    </div>
@endsection
