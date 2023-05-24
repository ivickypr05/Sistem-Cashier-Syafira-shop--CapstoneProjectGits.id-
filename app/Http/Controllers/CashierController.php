<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { {
            $products = Product::with('category')->get();
            return view('cashier.product', compact('products'));
        }
    }
    /**
     * Show the form for Search.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $products = Product::with('category')->get();

        $keyword = $request->input('keyword');

        $products = Product::where('name', 'like', "%$keyword%")
            ->orWhere('category_id', 'like', "%$keyword%")
            ->get();

        if ($products->isEmpty()) {
            alert()->error('oops...', 'product tidak ditemukan');
            return back();
        }
        // mengirim data pegawai ke view index
        return view('cashier.product', compact('products'));
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
