<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Transaction;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'balance'
    ];

    // Wallet belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Wallet has many transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}