<?php

namespace App\Models\Visits;

use App\Models\BaseModel;

class VisitPage extends BaseModel {

    protected $table = 'visitpage';
    protected $fillable = [
        "count",
        "init_in",
        "finish_in",
    ];

}
