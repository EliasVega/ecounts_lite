<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrePurchase extends Model
{
    use HasFactory;

    public $table = 'pre_purchases';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'items',
        'total',
        'total_iva',
        'total_pay',
        'balance',
        'status',
        'user_id',
        'branch_id',
        'supplier_id',
    ];

    protected $guarded = [
        'id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function prePurchaseProducts(){
        return $this->hasMany(PrePurchaseProduct::class);
    }






    public function resolution(){
        return $this->belongsTo(Resolution::class);
    }

    public function documentType(){
        return $this->belongsTo(DocumentType::class);
    }





    public function productPurchases(){
        return $this->hasMany(ProductPurchase::class);
    }

    public function voucherTipe()
    {
        return $this->belongsTo(Voucher_type::class);
    }

    public function generationType(){
        return $this->hasOne(Generation::class);
    }

    public function paymentForm(){
        return $this->belongsTo(Payment_form::class);
    }

    public function retention(){
        return $this->hasOne(Retention::class);
    }

    public function paymentMethod(){
        return $this->belongsTo(Payment_method::class);
    }
    //Relacion polimorfica con el pago
    public function pays()
    {
        return $this->morphMany(pay::class, 'payable');
    }
}
