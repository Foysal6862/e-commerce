@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Category Form</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success">{{Session::get('message')}} </h3>
                    <form action="{{route('new-category')}} " method="POST" class="from-horizontal">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Category Name</label>
                            <div class="col-md-8" >
                                <select name="category_id" id="" class="form-control">
                                    <option value="">--Select Category Name--</option>
                                    <option value="1">Category One</option>
                                    <option value="2">Category Two</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Brand Name</label>
                            <div class="col-md-8" >
                                <select name="brand_id" id="" class="form-control">
                                    <option value="">--Select Brand Name--</option>
                                    <option value="1">Brand One</option>
                                    <option value="2">Brand Two</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" name="product_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Product Price</label>
                            <div class="col-md-8">
                                <input type="number" name="product_price" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Product Quantity</label>
                            <div class="col-md-8">
                                <input type="number" name="product_quantity" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Short Description</label>
                            <div class="col-md-8">
                                <textarea name="short_description" class="form-control" id="" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Long Description</label>
                            <div class="col-md-8">
                                <textarea name="long_description"  class="form-control" id="editor" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Product Image</label>
                            <div class="col-md-8">
                                <input type="file"  name="product_image" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="publication_status"  value="1">Published</label>
                                <label><input type="radio" name="publication_status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Product Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
