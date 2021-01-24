@extends('backend.back_master')
@section('content')

<script src="https://cdn.tiny.cloud/1/o1kj5zziqu1q8rlav7c9torfbau90d0jofo6gwe495eg18kf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea.tinymce',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>

<div class="wrapper">
<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Slider > <span>Slider Management (Section-1)</span></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-color">Slider Contents</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                             @foreach($slider as $all_slide)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td><img src="{{ asset($all_slide->image) }}" alt="post-image" width="100" height="100" class="img-responsive post-image" />
                                                </td>
                                                <td>{{$all_slide->description}}</td>
                                                <td>{{$all_slide->status}}</td>
                                                <td><a href="{{url('/admin/slider/update',$all_slide->id)}}" class="action-btn" data-toggle="modal" data-target="#exampleModal{{$all_slide->id}}"><i class="far fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                <a href="{{url('/admin/slider/destroy',$all_slide->id)}}" type="submit" id="del" onclick="myFunction()" class="action-btn"><i class="fas fa-times"></i></a></td></tr>



                <div class="modal fade" id="exampleModal{{$all_slide->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                             </button>
                                                 </div>
                                                <div class="modal-body">

                    <form action="{{ url('/admin/slider/update', $all_slide->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label" for="image">Edit Image</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                            <label>Edit Description</label>
                            <textarea class="tinymce" name="description">
                            {{$all_slide->description}}
                                            </textarea>
                        </div>

                         <div class="form-group" >
                                            <p>Edit Status:</p>
                                        <input type="radio" id="active" name="status" value="Active">
                                        <label for="active">Active</label><br>
                                        <input type="radio" id="inactive" name="status" value="Inactive">
                                        <label for="inactive">Inactive</label><br>
                        </div>
                        <div class="modal-image text-center">
                            <img src="{{asset('public/backend/assets/img-icon/logo.png')}}" class="img-fluid">
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
                              <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                    <h5 class="text-color">Add Slider Content</h5>
                                        </div>
                                        <form action="{{url('/admin/slider/store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <div class="card-body">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                       
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="radio" id="active" name="status" value="Active">
                                                    <label for="active">Active</label>
                                                    <input type="radio" id="inactive" name="status" value="Inactive">
                                                    <label for="inactive">Inactive</label><br><br>
                                                    </div>
                                                        </div>

                                                        <div class="form-group">
                                            Enter Description Below<br>
                                            <textarea class="tinymce" name="description" value="">
                                            </textarea>
                                        </div><br>
                                                        
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





