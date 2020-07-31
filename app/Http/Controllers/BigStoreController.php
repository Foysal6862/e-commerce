<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BigStoreController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function contactUs(){
        return view('front-end.contact.contact');
    }
    public function hairCare(){
        return view('front-end.personal.hair-care');
    }
    public function naturalCream(){
        return view('front-end.cream.cream');
    }
}
