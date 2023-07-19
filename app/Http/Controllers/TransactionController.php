<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('transaction.index', [
            'transactions' => Transaction::latest()->get(),
            'services' => Service::get(),
            'categories' => Category::get(),
        ]);
    }
    public function store(Request $request)
    {
        Transaction::create([
            'category_id' => $request->category_id,
            'service_id' => $request->service_id,
            'weight' => $request->weight,
            'totalTransaction' => $request->totalTransaction,
            'costumer' => $request->costumer,
            'telp' => $request->telp,
            'address' => $request->address,
            'payment' => $request->payment
        ]);

        return back()->with('success', 'Created transaction successfully');
    }

    public function show($id)
    {
        return view('transaction.show', [
            'transaction' => Transaction::whereId($id)->first(),
            'services' => Service::get(),
            'categories' => Category::get(),
        ]);
    }
}
