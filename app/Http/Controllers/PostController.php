<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Cloudinary;

class PostController extends Controller
{
    public function grade_index(Post $post)
    {
        return view('posts/grade_index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
     public function class_index(Post $post)
    {
        return view('posts/class_index')->with(['posts' => $post->getPaginateByLimit()]);
    }

     public function name_index(Post $post)
    {
        return view('posts/name_index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }


    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }

    public function store(Post $post, Request $request)
    {
         $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

/*    public function store(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
*/  
}
