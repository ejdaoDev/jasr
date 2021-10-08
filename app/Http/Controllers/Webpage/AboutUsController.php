<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Sells\WishList;
use App\Models\Sells\Cart;
use App\Models\Sells\Invoice;
use App\Models\Sells\InvoiceList;
use Illuminate\Http\Request;
use Session;

class AboutUsController extends Controller {

    public function __construct() {
     
    }

    public function showAboutUs() {
        return view('webpage.aboutUs');
    }

}
