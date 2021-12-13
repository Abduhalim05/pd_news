@extends('layouts.admin')

@section('content')

    <x-breadcrumb>
        Posts / Create
    </x-breadcrumb->

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Post Create</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter Title" name="title" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
               <textarea name="body" id="postBody" class="form-control" cols="30" rows="10" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>
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
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>
@endsection
{{-- @section('js')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'postBody' );
</script>

@endsection --}}
{{-- bu tepadagi ckeditor uchun, widgetga aylantirib beruvchi narsa! Laravelni oxirgi versiyasini hali padderjka qilmadi 24.10.2021 Agar ishlasa
    shuni composerga yoz: composer require unisharp/laravel-ckeditor --}}

