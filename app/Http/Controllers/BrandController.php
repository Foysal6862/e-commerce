<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.add-brand');
    }

    public function saveBrand(Request $request){
        $this->validate($request,[
            'brand_name' =>'required|regex:/^[\pL\s\-]+$/u|min:2|max:20',
            'brand_description' =>'required',
        ]);
    }

    public function manageBrand(){

    }
}
