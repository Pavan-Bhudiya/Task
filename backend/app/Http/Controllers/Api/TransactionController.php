<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'wallet_id' => 'required|exists:wallets,id',
            'amount' => 'required|numeric|min:1',
            'type' => 'required|in:income,expense',
            'description' => 'nullable|string'
        ]);

        $transaction = Transaction::create($request->all());

        return response()->json($transaction);
    }
}