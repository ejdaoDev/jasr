<?php

namespace App\Http\Controllers\Dashboard\Sells;

use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Sells\Cart;
use App\Models\Sells\Invoice;
use App\Models\Sells\InvoiceList;
use Illuminate\Http\Request;

use Session;

class CartController extends Controller {

    public function __construct() {
       $this->middleware('auth');
        //$this->middleware('admin')->except('showProduct');
    }
    
    public function discardFromCar($id) {
      $product = Cart::findOrFail($id);
      $product->delete();
      return back();
    }
    
     public function buyArticles() {
       $articles = Cart::all()->where("user_id", auth()->id());
       $newInvoice["total"] = Cart::all()->where("user_id", auth()->id())->sum("total");
       $newInvoice["user_id"] = auth()->id();
       $newInvoice["paidout"] = false;
       $newInvoice["delivered"] = false;
       $newInvoice["company_id"] = 1;
       Invoice::create($newInvoice);
       $invoice_id =  Invoice::where('user_id', '=', auth()->id())->orderby('id', 'DESC')->first();
       foreach ($articles as $article){
           //$product = Product::findOrFail($article->product_id);
           $Item["invoice_id"] = $invoice_id["id"];
           $Item["product_id"] = $article->product_id;
           $Item["amount"] = $article->amount;
           $Item["unit_value"] = $article->price;
           $Item["total_value"] = $article->total;
           $Item["discount"] = $article->product->discount;
           $Item["discount_percentage"] = $article->product->discount_percentage;
           if($article->product->discount == true){
               $Item["saving_perunit"] = $article->product->price/100 * $article->product->discount_percentage;
               $Item["total_saving"] = ($article->product->price*$article->amount)/100 * $article->product->discount_percentage;
           }
           if($article->product->discount == false){
               $Item["saving_perunit"] = 0;
               $Item["total_saving"] = 0;
           }
           $Item["shippingtype_id"] = $article->product->shipping_type->id;
           InvoiceList::create($Item);
           //$upd["stock"] = $product["stock"] - $article->amount;
           //$product->update($upd);
           $article->delete();           
       }     
       Session::flash('sellcorrectly', 'Los productos fueron comprados correctamente');
        return back();
       
    }  
    
    public function shopOneProduct(Request $request, $id) {     
        if($request->amount2 == null){
            $request->amount2 = 1;
        }
        $product = Product::findOrFail($id);
       $newInvoice["total"] = $product["realprice"] * $request->amount2;
       $newInvoice["user_id"] = auth()->id();
       $newInvoice["paidout"] = false;
       $newInvoice["delivered"] = false;
       $newInvoice["company_id"] = 1;
       Invoice::create($newInvoice);
       $invoice_id =  Invoice::where('user_id', '=', auth()->id())->orderby('id', 'DESC')->first();

           $Item["invoice_id"] = $invoice_id["id"];
           $Item["product_id"] = $id;
           $Item["amount"] = $request->amount2;
           $Item["unit_value"] = $product->realprice;
           $Item["total_value"] = $product->realprice * $request->amount2;
           $Item["discount"] = $product->discount;
           $Item["discount_percentage"] = $product->discount_percentage;
           if($product->discount == true){
               $Item["saving_perunit"] = $product->price/100 * $product->discount_percentage;
               $Item["total_saving"] = ($product->price*$request->amount2)/100 * $product->discount_percentage;
           }
           if($product->discount == false){
               $Item["saving_perunit"] = 0;
               $Item["total_saving"] = 0;
           }
           $Item["shippingtype_id"] = $product->shipping_type->id;
           InvoiceList::create($Item);
           //$upd["stock"] = $product["stock"] - $article->amount;
           //$product->update($upd);
           //$article->delete();           
            
       Session::flash('sellcorrectly', 'El producto fue comprado correctamente');
        return back();
       
    }  
 
}
