<?php

namespace App\Http\Controllers\Webpage\Blogs;

use App\Http\Controllers\Controller;

class Blog2021Controller extends Controller {

    public function __construct() {
        
    }

    public function showBlogs2021() {
         $title="JASR | Blogs";
        return view('webpage.blogs.2021.2021', compact('title'));
    }
    
    public function showBlog001() {
        $title="Proyecto base de laravel con admin lte";
        return view('webpage.blogs.2021._15_08_2021', compact('title'));
    }
    public function showBlog002() {
        $title="¿Como subir imagenes desde front laravel a back laravel?";
        return view('webpage.blogs.2021._20_09_2021', compact('title'));
    }
    public function showBlog003() {
        $title="Dashboard gratuito con angular material";
        return view('webpage.blogs.2021._05_11_2021', compact('title'));
    }
    
}
