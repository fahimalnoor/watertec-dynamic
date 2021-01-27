@extends('backend.back_master')
@section('content')

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
                                                <td>{{$all_product->status}}</td>
                                                <td><img src="{{ asset($all_product->image) }}" alt="product-image" width="100" height="100" class="img-responsive post-image" />
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

                    <form action="{{ url('/admin/products/update', $all_product->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Edit Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Edit Product Name" value="{{$all_product->name}}">

                        </div>
                        <div class="form-group">
                            <label>Edit URL</label>
                            <input type="url" name="url" class="form-control" placeholder="Edit URL" value="{{$all_product->url}}">

                        </div>
                        <div class="form-group" >
                                            <p>Edit Status:</p>
                                        <input type="radio" id="active" name="status" value="Active">
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





