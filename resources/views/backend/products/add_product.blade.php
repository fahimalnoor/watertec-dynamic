@extends('backend.back_master')
@section('content')

<script src="https://cdn.tiny.cloud/1/o1kj5zziqu1q8rlav7c9torfbau90d0jofo6gwe495eg18kf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea.tinymce',
      plugins: 'a11ychecker code autoresize inline image textpattern imagetools advcode casechange formatpainter linkchecker autolink lists advlist checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker', 
      toolbar: 'a11ycheck addcomment inline showcomments casechange checklist code imagetools advlist formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      advlist_bullet_styles: 'circle',
      images_upload_url: 'postAcceptor.php',
      image_advtab: true,
      automatic_uploads: false,
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>

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
                                        
                                        <div class="form-group">
                                            Enter Description Below<br>
                                            <textarea class="tinymce" name="description" value="">
                                            </textarea>
                                        </div><br>
                                        <div class="form-group" >
                                            <p>Edit Status:</p>
                                        <input type="radio" id="active" name="status" value="Active">
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





