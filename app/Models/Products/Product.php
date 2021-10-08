<?php

namespace App\Models\Products;

use App\Models\BaseModel;
use App\Models\Products\Category;
use App\Models\Products\ProductDetails;
use App\Models\Products\ProductImages;
use App\Models\Products\ProductSpecs;
use App\Models\Products\ProductFeatures;
use App\Models\Products\ShippingType;

class Product extends BaseModel {

    protected $table = 'products';
    protected $fillable = [
        "category_id",
        "name",
        "link",
        "detail_id",
        'company_id',
        'user_id',
        "image",
        "stock",
        "price",
        "realprice",
        "discount",
        "free_send",
        "discount_percentage",
        "shippingtype_id",
        "outstanding",
        "active",
        "clavewords",
    ];
    
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function details()
    {
        return $this->hasOne(ProductDetails::class);
    }
    public function shipping_type()
    {
        return $this->hasOne(ShippingType::class,'id','shippingtype_id');
    }
    
    public function images()
    {
        return $this->hasMany(ProductImages::class, 'product_id', 'id' );
    }
    
    public function specs()
    {
        return $this->hasMany(ProductSpecs::class, 'product_id', 'id' );
    }
    
    public function features()
    {
        return $this->hasMany(ProductFeatures::class, 'product_id', 'id' );
    }
    
    
    
    
    
    

}
