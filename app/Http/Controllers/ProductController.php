<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.add-product');
    }

    public function manageProduct(){
        return view('admin.product.manage-product');
    }
}
