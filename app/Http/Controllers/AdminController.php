<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dadmin');
    }

    public function transactionlist()
    {
        $transactions = Transaction::all();
        return view('admin.transaction.index', compact('transactions'));
    }

    public function transaction_detail($id)
    {
        $transactions = Transaction::with('detail_transaction')->FindOrFail($id);
        // dd($transactions);
        return view('admin.transaction.detail', compact('transactions'));
    }

}
