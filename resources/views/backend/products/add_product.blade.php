@extends('backend.back_master')
@section('content')


<div class="wrapper">
       <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Product > <span>Add Product</span></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h5 class="text-color">Add Product</h5>
                                        </div>
                                        <form action="{{url('/admin/products/store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name">
                                        </div>
                                        <div class="form-group">
                                            <label></label>
                                            <select class="form-control select2" name="under_cat" style="width: 100%;">
                                                <option >Select Category</option>
                                                @foreach($cat as $all_cat)  
                                                <option value="{{$all_cat->cat_name}}">{{$all_cat->cat_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="url" name="url" placeholder="Enter URL">
                                        </div>
                                        
                                        <div class="form-group" >
                                            <p>Edit Status:</p>
                                        <input type="radio" id="active" name="status" value="Active" checked>
                                        <label for="active">Active</label><br>
                                        <input type="radio" id="inactive" name="status" value="Inactive">
                                        <label for="inactive">Inactive</label><br>
                                            </div>
                                             <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label" for="image">Cover Image</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="pro_image" id="pro_image">
                                                <label class="custom-file-label" for="pro_image">Product Image</label>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary btn-custom">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





