<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required'
        ]);

        $wallet = Wallet::create($request->all());

        return response()->json($wallet);
    }

    public function show($id)
    {
        $wallet = Wallet::with('transactions')->findOrFail($id);

        return response()->json([
            'wallet' => $wallet->name,
            'balance' => $wallet->balance(),
            'transactions' => $wallet->transactions
        ]);
    }
}