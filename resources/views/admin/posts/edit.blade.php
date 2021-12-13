@extends('layouts.admin')

@section('content')

    <x-breadcrumb>
        Posts / Edit
    </x-breadcrumb->

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Post Edit {{$post->id}}</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter Title" name="title"  value="{{$post->title}}" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
               <textarea name="body" class="form-control" id="postBody" cols="30" rows="10"  >
                    {{$post->body}}
               </textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control" id="">
                    <option  {{$post->status==1 ? 'selected' : ''  }} value="1">Active</option>
                    <option {{$post->status==0 ? 'selected' : ''  }}  value="0">Inactive</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>
@endsection
