<?php

namespace App\Http\Controllers\Dashboard\Products;

use App\Http\Controllers\Controller;
use App\Models\Products\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function showCreateCategory() {
        return view('dashboard.products.CreateCategory');
    }

    public function showEditCategory() {
        return view('dashboard.products.EditCategory');
    }

    public function createCategory(Request $request) {
        $category['name'] = ucwords(strtolower(trim($request->name)));
       // if ($request->hasFile('image')) {
            $icon = $request->file('image');
            $name = $icon->getClientOriginalName();
            $ext = $icon->getClientOriginalExtension();
            $domain = auth()->user()->company->domain;
            $icon->move('assets/webpages/'.$domain.'/images/categories', $name);
            rename("assets/webpages/".$domain."/images/categories/" . $name, "assets/webpages/".$domain."/images/categories/" . str_replace("'", "", $request->name) . "." . $ext);
            $category["icon"] = str_replace("'", "", $request->name) . "." . $ext;
       // } else {
       //     $category["icon"] = "favicon.svg";
       // }
        $category["company_id"] = auth()->user()->company_id;
        Category::create($category);
        Session::flash('categorycreate', 'La categoria fue registrada correctamente');
        return redirect("create-category");
    }

}
