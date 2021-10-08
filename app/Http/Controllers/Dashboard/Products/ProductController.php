<?php

namespace App\Http\Controllers\Dashboard\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\ProductRequest;
use App\Models\Sells\Cart;
use App\Models\Products\Product;
use App\Models\Products\ProductImages;
use App\Models\Products\ProductDetails;
use App\Models\Products\ProductFeatures;
use App\Models\Products\ProductSpecs;
use App\Models\Products\Category;
use Illuminate\Http\Request;
use App\Models\Products\ShippingType;
use Session;

class ProductController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function showCreateProduct() {
        session(['features' => 5]);
        session(['specs' => 5]);
        $categories = Category::all()->where("company_id",auth()->user()->company_id);
        $shippingtypes = ShippingType::all();
        return view('dashboard.products.CreateProduct',compact("categories","shippingtypes"));
        
    }

    public function showProductList() {
        return view('dashboard.products.EditProduct');
    }
    
    public function showEditProduct($id) {
        $product = Product::findOrFail($id);
        if($product["company_id"] != auth()->user()->company_id){
            return back();
        }
        return view('dashboard.products.EditSelectedProduct', compact("product"));
    }
    
     public function addMoreProperties(Request $request) {
        session(['features' => $request->features]);
        session(['specs' => $request->specs]);
        $categories = Category::all()->where("company_id",auth()->user()->company_id);
        $shippingtypes = ShippingType::all();
        return view('dashboard.products.CreateProduct', compact("categories","shippingtypes"));
    }

    public function createProduct(ProductRequest $request) {
        /*
         * Lo primero que hacemos es comprobar si alguna imagen
         * supera el limite permitido, se acepta cualquier extensión,
         * es responsabilidad del administrador.
         */
        foreach ($request->images as $image) {            
            $size = $image->getSize();
            if ($size > 10485760) {
                Session::flash('invalidimage', 'Uno de los archivos pesa mas de 10 mb');
                return redirect('create-product');
            }
        }
        /*
         * Eliminamoas el acento de las letras y caracteres especiales invalidos
         * para la creación del link.
         */
        $NameWithoutAcent = str_replace(
                array("á", "é", "í", "ó", "ú"), array("a", "e", "i", "o", "u"), (trim($request->name)));
        $NameWithoutSpecialCaracters = str_replace(
                array("'", "#", " ", ".", '"', ",", ":", "/"), "-", strtolower(trim($NameWithoutAcent)));

        // $i = 0;
        /*
         * Eliminamos las comas del precio
         */
        $request->price = str_replace(",", "", $request->price);


        /*
         * Creamos el producto para obtener el id.
         */
        $newProduct["category_id"] = $request->category;
        $newProduct["company_id"] = auth()->user()->company_id;
        $newProduct["user_id"] = auth()->id();
        $newProduct["name"] = trim($request->name);
        $newProduct["link"] = $NameWithoutSpecialCaracters;
        $newProduct["stock"] = $request->stock;
        $newProduct["price"] = $request->price;

        if ($request->discount == null) {
            $newProduct["discount"] = false;
        } else {
            $newProduct["discount"] = $request->discount;
        }

        if ($request->discount_percentage == null) {
            $newProduct["discount_percentage"] = 0;
        } else {
            $newProduct["discount_percentage"] = $request->discount_percentage;
        }

        if ($request->discount == true) {
            $newProduct["realprice"] = $request->price - (($request->price / 100) * $request->discount_percentage);
        } else {
            $newProduct["realprice"] = $request->price;
        }

        if ($request->shippingtype == null) {
            $newProduct["shippingtype_id"] = 2;
        } else {
            $newProduct["shippingtype_id"] = $request->shippingtype;
        }

        if ($request->outstanding == null) {
            $newProduct["outstanding"] = false;
        } else {
            $newProduct["outstanding"] = $request->outstanding;
        }

        $newProduct["active"] = true;
        
        $newProduct["clavewords"] = trim($request->name)." ".$request->clavewords;        
        
        Product::create($newProduct);

        /*
         * Se busca el ultimo producto que creó el usuario actualmente logueado
         */
        $product = Product::where("user_id", auth()->id())->orderBy('id', 'desc')->first();
        $domain = auth()->user()->company->domain;

        /*
         * Insertamos la imagen principal en la base de datos y en el servidor.
         */
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $ext = $image->getClientOriginalExtension();
        $image->move('assets/webpages/' . $domain . '/images/products', $name);
        rename("assets/webpages/".$domain."/images/products/" . $name, "assets/webpages/".$domain."/images/products/" . $NameWithoutSpecialCaracters . "." . $ext);
        $upd["image"] = $NameWithoutSpecialCaracters . "." . $ext;
        $product->update($upd);

        /*
         * Se procede a almacenar las imagenes de muestra en la base de datos
         * y en el servidor.
         */
        $i = 0;
        foreach ($request->images as $image) {
            $name = $image->getClientOriginalName();
            $ext = $image->getClientOriginalExtension();
            $image->move("assets/webpages/" . $domain . "/images/product-details", $name);
            rename("assets/webpages/".$domain."/images/product-details/" . $name, "assets/webpages/".$domain."/images/product-details/" . $NameWithoutSpecialCaracters . $i . "." . $ext);
            $newimage["product_id"] = $product["id"];
            $newimage["route"] = $NameWithoutSpecialCaracters . $i . "." . $ext;
            ProductImages::create($newimage);
            $i++;
        }

        /*
         * Se guardan los detalles, caracteristicas 
         * y especificaciones del producto.
         */
        $details["product_id"] = $product["id"];
        $details["details"] = $request->details;
        ProductDetails::create($details);

        for ($i = 0; $i < session("features"); $i++) {
            if ($request->get("feature$i") != null) {
                $feature["product_id"] = $product["id"];
                $feature["feature"] = $request->get("feature$i");
                ProductFeatures::create($feature);
            }
        }

        for ($i = 0; $i < session('specs'); $i++) {
            if ($request->get("spec$i") != null) {
                $spec["product_id"] = $product["id"];
                $spec["spec"] = $request->get("spec$i");
                ProductSpecs::create($spec);
            }
        }
        Session::flash('productcreate', 'El producto fue registrado correctamente');
        return redirect('create-product');
    }
    
     public function PauseProduct($id) {
        $product = Product::findOrFail($id);
        $items = Cart::all()->where("product_id",$id);        
        $upd["active"] = false;
        $product->update($upd);
        foreach($items as $item){
            $item->delete();
        }        
         Session::flash('pausesuccessfully', 'Producto suspendido correctamente');
        return back();
    }
    
    public function UnpauseProduct($id) {
        $product = Product::findOrFail($id);    
        $upd["active"] = true;
        $product->update($upd);        
         Session::flash('unpausesuccessfully', 'Producto reanudado correctamente');
        return back();
    }
    
    
}
