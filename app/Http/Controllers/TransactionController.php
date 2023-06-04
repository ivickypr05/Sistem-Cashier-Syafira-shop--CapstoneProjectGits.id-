<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user_id = Auth::user()->id;
        $transactions = Transaction::where('user_id', $user_id)->get();
        return view('cashier.transaction', compact('user', 'transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function getpayment(Request $request)
    // {
    //     // $userId = $request->input('user_id');
    //     $carts = Cart::with('product')->where('user_id', Auth::user()->id);
    //     $paymentAmount = $request->input('payment');
    //     // Mengambil semua item cart yang terkait dengan user
    //     // dd($carts);
    //     if ($carts == null) {
    //         return redirect()->back()->with('error', 'Produk dalam keranjang tidak ada');
    //     }

    //     $totalPrice = 0;

    //     // Menghitung total harga dari item-item cart
    //     foreach ($carts as $cart) {
    //         $totalPrice += $cart->product->sell_price * $cart->amount;
    //     }
    //     dd($totalPrice);
    //     // Memvalidasi jumlah pembayaran
    //     if ($paymentAmount >= $totalPrice) {
    //         // Membuat transaksi baru
    //             $transaction = new Transaction();
    //             $transaction->user_id = $cart->user_id;
    //             $transaction->invoice_nomor = rand(1000, 9999);
    //             $transaction->cart_id = $cart->id;
    //             $transaction->total_price = $cart->product->sell_price * $cart->amount;
    //             $transaction->amount = $cart->amount;
    //             $transaction->payment = $paymentAmount;
    //             $transaction->change = $paymentAmount - $totalPrice;
    //             $transaction->save();


    //             // Menghapus entri cart
    //             $cart->delete();
    //         }
    //         return redirect('/transaction')->with('Success', 'Pembayaran Berhasil');
    //     } else {
    //         return redirect()->back()->with('error', 'maaf uang Pembayaran kurang');
    //     }
    // }
    // $user = Auth::user()->id;
    // // dd($user);
    // $total = Cart::join('products', 'carts.product_id', '=', 'products.id')
    //     ->where('user_id', $user)
    //     ->sum(DB::raw('carts.amount * products.sell_price'));
    // // dd($total);
    // // dd($cart);
    // $product = Product::get();
    // // dd($product);
    // // validasi apakah bayaran kurang atau lebih
    // if ($request->payment < $total) {
    //     return redirect()->back()->with('error', 'maaf uang Pembayaran kurang');
    // } else {
    //     $cart = Cart::where('user_id', Auth::user()->id)->first();
    //     $cart_id = $cart->id;
    //     // untuk menambahkan data dari cart jika bayaran sudah lebih dari total
    //     $transactions = Transaction::where('cart_id', $cart_id)->get();
    //     $transaction = new Transaction();
    //     foreach ($transactions as $item) {
    //         $transaction->user_id = $user;
    //         $transaction->cart_id = $item->id;
    //         $transaction->amount = $item->amount;
    //     }
    //     foreach ($product as $data) {
    //         $transaction->product_id = $data->id;
    //         $transaction->total_price = $total;
    //         $transaction->change = $request->payment - $total;
    //     }
    //     $transaction->save();
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
