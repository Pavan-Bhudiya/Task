<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('password')
        ]);

        return response()->json($user);
    }

    public function show($id)
    {
        $user = User::with('wallets.transactions')->findOrFail($id);

        $wallets = $user->wallets->map(function ($wallet) {
            return [
                'id' => $wallet->id,
                'name' => $wallet->name,
                'balance' => $wallet->balance()
            ];
        });

        $total = $wallets->sum('balance');

        return response()->json([
            'user' => $user->name,
            'wallets' => $wallets,
            'total_balance' => $total
        ]);
    }
}