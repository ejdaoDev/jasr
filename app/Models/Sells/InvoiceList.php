<?php

namespace App\Models\Sells;

use App\Models\BaseModel;
use App\Models\Products\Product;

class InvoiceList extends BaseModel {

    protected $table = 'invoicelist';
    protected $fillable = [
        "invoice_id",
        "product_id",
        "amount",
        "unit_value",
        "total_value",
        "discount",
        "discount_percentage",
        "saving_perunit",
        "total_saving",
        "shippingtype_id",
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
