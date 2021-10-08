<?php

namespace App\Models\Security;

use App\Models\BaseModel;

class Role extends BaseModel {

    protected $table = 'roles';
    protected $fillable = [
        "name",
    ];

}
