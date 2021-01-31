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
                        <h6 class="m-0 text-color">Home > Product > <span>Manage Product</span></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-color">Product</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>URL</th>
                                                <th>Product Image</th>
                                                <th>Status</th>
                                                <th>Cover Image</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                             @foreach($product as $all_product)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$all_product->name}}</td>
                                                <td>{{$all_product->under_cat}}</td>
                                                <td>{{$all_product->url}}</td>
                                                <td><img src="{{ asset($all_product->pro_image) }}" width="100" height="100" class="img-responsive post-image" />
                                                </td>
                                                <td>{{$all_product->status}}</td>
                                                <td><img src="{{ asset($all_product->image) }}" width="100" height="100" class="img-responsive post-image" />
                                                </td>
                                                <td><a href="{{url('/admin/products/update',$all_product->id)}}" class="action-btn" data-toggle="modal" data-target="#exampleModal{{$all_product->id}}"><i class="far fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                    <a href="{{url('/admin/products/destroy',$all_product->id)}}" type="submit" id="del" onclick="myFunction()" class="action-btn"><i class="fas fa-times"></i></a></td></tr>



                <div class="modal fade" id="exampleModal{{$all_product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                             </button>
                                                 </div>
                                                <div class="modal-body">

                    <form action="{{ url('/admin/products/update', $all_product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Edit Product Name" value="{{$all_product->name}}" readonly>

                        </div>
                        <div class="form-group">
                            <label>Edit URL</label>
                            <input type="url" name="url" class="form-control" placeholder="Edit URL" value="{{$all_product->url}}">

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
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="pro_image" id="pro_image">
                                                <label class="custom-file-label" for="pro_image">Change Product Image</label>
                                            </div>
                                        </div>
                        <div class="form-group" >
                                            <p>Edit Status:</p>
                                        <input type="radio" id="active" name="status" value="Active" checked>
                                        <label for="active">Active</label><br>
                                        <input type="radio" id="inactive" name="status" value="Inactive">
                                        <label for="inactive">Inactive</label><br>
                        </div>
                        <div class="modal-image text-center">
                            <img src="{{asset('public/backend/assets/img-icon/pro-1.png')}}" class="img-fluid">
                        </div>
                        <div class="modal-btn text-center">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
                                            
                </tbody>
                    </table>
                        </div>
                            </div>
                             </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
    <script>

function myFunction() {
  
  if (confirm("Are you sure to delete this item ?")) 
  {
   return true;
  } else {
    return false;
  }
  document.getElementById("del");
}
 </script>


@endsection





