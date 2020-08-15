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

Route::get('/category/add',[
    'uses' => 'CategoryController@index',
    'as' => 'add-category'
]);

Route::get('/category/manage',[
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
]);

Route::post('/category/save',[
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses' => 'CategoryController@unpublishedCategory',
    'as' => 'unpublished-category'
]);

Route::get('/category/published/{id}',[
    'uses' => 'CategoryController@publishedCategory',
    'as' => 'published-category'
]);

Route::get('/category/edit/{id}',[
    'uses' => 'CategoryController@editCategory',
    'as' => 'edit-category'
]);

Route::post('/category/update',[
    'uses' => 'CategoryController@updateCategory',
    'as' => 'update-category'
]);

Route::get('/category/delete/{id}',[
    'uses' => 'CategoryController@deleteCategory',
    'as' => 'delete-category'
]);

Route::get('/brand/add',[
    'uses' => 'BrandController@index',
    'as' => 'add-brand'
]);

Route::get('/brand/manage',[
    'uses' => 'BrandController@manageBrand',
    'as' => 'manage-brand'
]);

Route::post('/brand/save',[
    'uses' => 'BrandController@saveBrand',
    'as' => 'new-brand'
]);


Route::get('/product/add',[
    'uses' => 'ProductController@index',
    'as' => 'add-product'
]);

Route::get('/product/manage',[
    'uses' => 'ProductController@manageProduct',
    'as' => 'manage-product'
]);

















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
