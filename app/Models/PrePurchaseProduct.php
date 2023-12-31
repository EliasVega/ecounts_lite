<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrePurchaseProduct extends Model
{
    use HasFactory;

    public $table = 'pre_purchase_products';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'quantity',
        'price',
        'iva',
        'subtotal',
        'iva_subtotal',
        'item',

        'pre_purchase_id',
        'product_id'
    ];
    public function prePurchase(){
        return $this->belongsTo(PrePurchase::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
