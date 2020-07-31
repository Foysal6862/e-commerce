<?php


use Illuminate\Support\Facades\Route;


Route::get('/',[
    'uses' => 'BigStoreController@index',
    'as' => 'home'
]);

Route::get('/contact-us',[
    'uses' => 'BigStoreController@contactUs',
    'as' => 'contact'
]);

Route::get('/personal-care',[
    'uses' => 'BigStoreController@hairCare',
    'as' => 'hair-care'
]);

Route::get('/cream',[
    'uses' => 'BigStoreController@naturalCream',
    'as' => 'natural-cream'
]);



