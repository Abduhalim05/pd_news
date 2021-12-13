<?php

namespace App\Repositories;
use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{

    public function getAll()
    {
       return Post::all();
    }

    public function store($request){
        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/posts/', $image_name);
            $data['image']=$image_name;
        }
        $data['slug']=\Str::slug($request->title);
        Post::create($data);
        return true;
    }
    public function findOne($id){
        return Post::findOrFail($id);
    }
    public function update($request, $id){
        $post=$this->findOne($id);

        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/posts/', $image_name);
            $data['image']=$image_name;
        }
        $data['slug']=\Str::slug($request->title);
        $post->update($data);
    }
    public function delete($id){
        return Post::destroy($id);
    }
}


