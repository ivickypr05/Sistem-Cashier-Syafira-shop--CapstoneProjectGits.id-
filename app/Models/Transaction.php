<?php

namespace App\Models;

use App\Models\User;
use App\Models\Detail_transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'invoice_nomor',
        'total_price',
        'total_profit',
        'payment'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    /**
     * Get all of the comments for the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail_transaction(): HasMany
    {
        return $this->hasMany(Detail_transaction::class, 'transaction_id', 'id');
    }
}
