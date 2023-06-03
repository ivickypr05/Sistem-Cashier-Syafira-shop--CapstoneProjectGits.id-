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
        $transactions = Transaction::with('cart')->where('user_id', $user_id)->get();
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
    public function getpayment(Request $request)
    {
        $user = Auth::user()->id;
        // dd($user);
        $total = Cart::join('products', 'carts.product_id', '=', 'products.id')
            ->where('user_id', $user)
            ->sum(DB::raw('carts.amount * products.sell_price'));
        // dd($total);
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        dd($cart);
        $product = Product::get();
        // dd($product);
        // validasi apakah bayaran kurang atau lebih
        if ($request->payment < $total) {
            return redirect()->back()->with('error', 'maaf uang Pembayaran kurang');
        } else {
            // untuk menambahkan data dari cart jika bayaran sudah lebih dari total
            $transaction = new Transaction();
            foreach ($cart as $item) {
                $transaction->user_id = $user;
                $transaction->cart_id = $item->id;
                $transaction->amount = $item->amount;
            }
            foreach ($product as $data) {
                $transaction->product_id = $data->id;
                $transaction->total_price = $total;
                $transaction->change = $request->payment - $total;
            }
            $transaction->save();
        }
        return redirect('/transaction');
    }
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
