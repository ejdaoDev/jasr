<?php

namespace App\Models\Sells;

use App\Models\BaseModel;
use App\Models\Products\Product;
use App\Models\Security\User;
use App\Models\Security\Company;

class WishList extends BaseModel {

    protected $table = 'wishlist';
    protected $fillable = [
        "product_id",        
        'company_id',
        'user_id',        
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
    
    
    
    

}
