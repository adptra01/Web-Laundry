<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Category;
use App\Models\Service;
use App\Models\Transaction;
use Carbon\Carbon;
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
    public function store(TransactionRequest $request)
    {
        $invoice = 'LDRY/'.Carbon::now()->format('dmy').'/'.$request->costumer;
        Transaction::create([
            'category_id' => $request->category_id,
            'service_id' => $request->service_id,
            'weight' => $request->weight,
            'totalTransaction' => $request->totalTransaction,
            'costumer' => $request->costumer,
            'telp' => $request->telp,
            'address' => $request->address,
            'payment' => $request->payment,
            'invoice' => $invoice
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

    public function report()
    {
        return view('transaction.report', [
            'transactions' => Transaction::get()
        ]);
    }

    public function invoice($id)
    {
        return view('transaction.invoice', [
            'transaction' => Transaction::whereId($id)->first()
        ]);
    }

    public function payment($id)
    {
        $transaction = Transaction::whereId($id)->first();
        if ($transaction->payment == true) {

            return back()->with('success', 'Maap, pembayaran telah dilunasi diawal');

        } elseif ($transaction->payment == false) {

            Transaction::whereId($id)->update([
                'payment' => true
            ]);

            return back()->with('success', 'Pembayaran telah dilunasi');
        }

    }

    public function update($id)
    {
        Transaction::whereId($id)->update([
            'status' => true
        ]);

        return back()->with('success', 'Laundry telah selesai');
    }
}
