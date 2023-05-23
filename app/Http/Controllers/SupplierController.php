<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::with('product')->get();
        return view('admin.supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::get();
        return view('admin.supplier.add', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'contact' => 'required|string|min:8|max:14',
            'product_id' => 'required|integer|exists:products,id',
            'amount' => 'required|integer|min:1',
        ]);
        Supplier::create($validatedData);

        // Menghubungkan supplier dengan produk dan mengupdate stok dari supplier
        $product = Product::where('id', $request->product_id)->first();
        $amount = $request->amount + $product->stock;
        $product->update([
            'stock' => $amount
        ]);

        return redirect('/supplier')->with('toast_success', 'Data Produk Berhasil Dimasukan >.<');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['products'] = Product::get();
        $data['supplier'] = Supplier::find($id);
        return view('admin.supplier.edit', $data);
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
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'contact' => 'required|string|min:8|max:14',
            'product_id' => 'required|integer|exists:products,id',
            'amount' => 'required|integer|min:1',
        ]);
        $supplier = Supplier::find($id);

        // mengedit jumlah stok dan menyesuaikan dengan data sebelum terupdate
        $product = Product::where('id', $request->product_id)->first();
        $kurang = $product->stock - $supplier->amount;
        $amount = $request->amount + $kurang;
        $product->update([
            'stock' => $amount
        ]);

        $supplier->update($validatedData);


        return redirect('/supplier')->with('toast_success', 'Data Pemasukan berhasil diedit >.<');
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
