<?php

namespace App\Models\Sells;

use App\Models\BaseModel;
use App\Models\Security\User;
use App\Models\Products\Product;

class Cart extends BaseModel {

    protected $table = 'cart';
    protected $fillable = [
        "product_id",
        "company_id",
        "amount",
        "price",
        "total",
        "user_id",
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
