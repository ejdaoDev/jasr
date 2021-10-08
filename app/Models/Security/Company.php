<?php

namespace App\Models\Security;

use App\Models\BaseModel;
use App\Models\Security\User;

class Company extends BaseModel {

    protected $table = 'companies';
    protected $fillable = [
        "name",
        "manager",
        "domain",
        "address",
        "city",
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    
    
    
    
    

}
