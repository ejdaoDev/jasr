<?php

namespace App\Http\Controllers\Dashboard\Sells;

use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Sells\WishList;
use App\Models\Sells\Cart;
use App\Models\Sells\Invoice;
use App\Models\Sells\InvoiceList;
use Illuminate\Http\Request;
use Session;

class SellController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin')->except("addToWishlist", "removeToWishlist");
        //$this->middleware('admin')->except("addToCar","discardFromCar","shopOneProduct","buyArticles");
    }

    public function payVerified($id) {
        $invoice = Invoice::findOrFail($id);
        $upd["paidout"] = true;
        $invoice->update($upd);
        $articles = InvoiceList::where("invoice_id", $id)->get();

        foreach ($articles as $article) {
            $product = Product::findOrFail($article->product_id);
            $product["stock"] = $product["stock"] - $article->amount;
            $product->update($upd);
        }
        Session::flash('verified', 'El pago de la venta fue verificado por el administrador');
        return back();
    }

    public function dispatchedVerified($id) {
        $invoice = Invoice::findOrFail($id);
        $upd["delivered"] = true;
        $invoice->update($upd);

        Session::flash('dispatched', 'El despacho de los productos fue verificado por el administrador');
        return back();
    }

    public function deleteInvoice($id) {
        $invoice = Invoice::findOrFail($id);
        $articles = InvoiceList::all()->where("invoice_id", $id);
        if ($invoice["paidout"] == false && $invoice["delivered"] == false) {
            foreach ($articles as $article) {
                $article->delete();
            }
            $invoice->delete();
        }
        Session::flash('invoiceDeleted', 'La venta fue anulada correctamente por el administrador');
        return back();
    }

    public function showFormSells() {
        $invoices = Invoice::all()->where("paidout", true)->where("delivered", true);
        return view("dashboard.sells.Sells", compact("invoices"));
    }

    public function showFormSellsDetails($id) {
        $items = InvoiceList::all()->where("invoice_id", $id);
        return view("dashboard.sells.SellsDetails", compact("items"));
    }

    public function showFormSalesForCollect() {
        $invoices = Invoice::all()->where("paidout", false)->where("delivered", false);
        return view("dashboard.sells.SalesForCollect", compact("invoices"));
    }

    public function showFormSalesForCollectDetails($id) {
        $items = InvoiceList::all()->where("invoice_id", $id);
        return view("dashboard.sells.SalesForCollectDetails", compact("items"));
    }

    public function showFormSalesForDispatched() {
        $invoices = Invoice::all()->where("paidout", true)->where("delivered", false);
        return view("dashboard.sells.SalesForDispatched", compact("invoices"));
    }

    public function showFormSalesForDispatchedDetails($id) {
        $items = InvoiceList::all()->where("invoice_id", $id);
        return view("dashboard.sells.SalesForDispatchedDetails", compact("items"));
    }

    public function addToWishlist($id) {
        $product = Product::findOrFail($id);
        if (WishList::where("product_id", $id)->where("user_id", auth()->id())->where("company_id", $product["company_id"])->count() > 0) {
            return back();
        } else {
            $new["product_id"] = $product["id"];
            $new["user_id"] = auth()->id();
            $new["company_id"] = $product["company_id"];
            WishList::create($new);
            return back();
        }
    }

    public function removeToWishlist($id) {
        $item = WishList::where("product_id", $id)->where("user_id", auth()->id());
        $item->delete();
        return back();
    }

}
