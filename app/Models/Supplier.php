<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'contact',
        'amount',
        'product_id'
    ];
    // public function addStockToProduct($product_id, $quantity)
    // {
    //     $product = $this->products()->find($product_id);

    //     if (!$product) {
    //         throw new \Exception('Product not found.');
    //     }

    //     $product->stock += $quantity;
    //     $product->save();
    // }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
