<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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
        $products = Product::with('category')->get();
        $carts = Cart::with('product')->where('user_id',$user_id)->get();
        $total = Cart::join('products', 'carts.product_id', '=', 'products.id')
            ->sum(DB::raw('carts.amount * products.sell_price'));

        return view('cashier.cart', compact('user', 'products', 'carts', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addtocart(Request $request, $id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($id);
        if ($request->amount > $product->stock) {
            return redirect()->back()->with('error', 'maaf stok tidak mencukupi');
        }

        $cart = Cart::where('user_id', $user->id)->where('product_id', $product->id)->first();
        // dd($cart);
        if ($cart) {
            Cart::where('id', $cart->id)->update(['amount' => $cart->amount + $request->amount]);
        } else {
            $cart = new Cart;
            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $cart->cashier_name = $user->name;
            $cart->amount = $request->amount;
            $cart->save();
        }


        return redirect('/cashier')->with('success', 'Product berhasil ditambah ke keranjang');


        // $product = Product::where('id', $id)->first();
        // // //temukan product
        // // if (!$product) {
        // //     return redirect()->back()->with('toast_error', 'Produk tidak ditemukan');
        // // }
        // //validasi stok

        // if ($request->qty > $product->stock) {
        //     return redirect()->back()->with('toast_error', 'maaf stok tidak mencukupi');
        // }

        // //cek validasi
        // $cek_cart = Cart::where('user_id', Auth::user()->id)->first();


        // //simpan ke database cart
        // if (empty($cek_cart)) {
        //     $cart = new Cart;
        //     $cart->user_id = Auth::user()->id;
        //     $cart->product_id = $request->product_id;
        //     $cart->total_price = 0;
        //     $cart->save();
        // }

        // // //simpan ke database cart detail
        // // $cart_baru = Cart::where('user_id', Auth::user()->id)->first();

        // // //cek cart detail
        // // $cek_transaction = Transaction::where('product_id', $product->id)->where('cart_id', $cart_baru->id)->first();
        // // if (empty($cek_transaction)) {
        // //     $transaction = new Transaction;
        // //     $transaction->product_id = $product->id;
        // //     $transaction->cart_id = $cart_baru->id;
        // //     $transaction->jumlah = $request->jumlah_pesan;
        // //     $transaction->jumlah_harga = $product->price * $request->jumlah_pesan;
        // //     $transaction->save();
        // // } else {
        // //     $transaction = Transaction::where('product_id', $product->id)->where('cart_id', $cart_baru->id)->first();

        // //     $transaction->jumlah = $transaction->jumlah + $request->jumlah_pesan;

        // //     //harga sekarang
        // //     $harga_transaction_baru = $product->price * $request->jumlah_pesan;
        // //     $transaction->jumlah_harga = $transaction->jumlah_harga + $harga_transaction_baru;
        // //     $transaction->update();
        // // }

        // // //jumlah total
        // // $cart = Cart::where('user_id', Auth::user()->id)->where('status', 0)->first();
        // $cart->total_price = $cart->total_price + $product->sell_price * $request->qty;
        // // $cart->update();
        // return redirect('/cart')->with('success', 'successfully added to cart');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $cart = Cart::findOrFail($id);
        if ($request->amount > $cart->product->stock) {
            return redirect()->back()->with('error', 'maaf stok tidak mencukupi');
        }
        // dd($product);
        $cart->update([
            'amount' => $request->amount,
        ]);
        return redirect('cart')->with('toast_success', 'Jumlah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect('cart')->with('toast_success', 'Produk berhasil dihapus');
    }
}
