@extends('layouts.admin')

    @section('content')
        <x-breadcrumb>
            Posts / Show
        </x-breadcrumb->

        <div>
            <a class="btn btn-info btn-sm col-md-1" href="{{route('admin.posts.edit', $post->id)}}">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm col-md-1 ">
                    <i class="fas fa-trash"></i>
                    Delete
                </button>
            </form>
        </div>

        <div class="card">
            <div class="card-header d-flex p-0">
                <h4>Title</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$post->title}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-0">
                <h4>Body</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$post->body}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-0">
                <h4>Image</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <img src="/admin/images/posts/{{$post->image}}" width="100px">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-0">
                <h4>Slug</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$post->slug}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-0">
                <h4>View</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$post->view}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-0">
                <h4>Status</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">

                    @if($post->status==1)
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-danger">Inactive</span>
                    @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-0">
                <h4>Created At</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$post->created_at}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-0">
                <h4>Updated At</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$post->updated_at}}
                    </div>
                </div>
            </div>
        </div>

    @endsection
