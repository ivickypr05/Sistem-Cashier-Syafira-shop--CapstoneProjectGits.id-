<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail_transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'name',
        'cap_price',
        'sell_price',
        'photo',
        'amount'
    ];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
