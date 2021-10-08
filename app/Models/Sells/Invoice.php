<?php

namespace App\Models\Sells;

use App\Models\BaseModel;
use App\Models\Security\User;
use App\Models\Security\Company;

class Invoice extends BaseModel {

    protected $table = 'invoice';
    protected $fillable = [
        "total",
        "user_id",
        'company_id',
        'paidout',
        'delivered',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
