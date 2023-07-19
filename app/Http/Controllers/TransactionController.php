<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $price = Service::whereId($request->service_id)->first()->price;
        $total = $request->weight * $price;

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

        return back();
    }
}
