<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'product_id',
        'stock',
    ];
    public function Supplier(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'product_id', 'id');
    }
    public function products(): HasMany
    {
        return $this->hasMany(Products::class, 'category_id', 'id');
    }
}
