<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Grade;
use App\Models\User;
use App\Models\Classx;
use Cloudinary;

class PostController extends Controller
{
    public function grade_index(Post $post,Grade $grade)
    {
        return view('posts/grade_index')->with(['posts' => $post->getPaginateByLimit(),'grades'=>$grade->get()]);
    }
    
     public function class_index(Grade $grade,Classx $classx)
    {
        return view('posts/class_index')->with(['grade' => $grade, 'classxes'=>$classx->get()]);
    }

     public function name_index(Grade $grade,Classx $classx,User $user)
    {
        return view('posts/name_index')->with(['grade' => $grade, 'classx'=>$classx, 'users'=>$user->get()]);
    }

    public function index(Grade $grade,Classx $classx,User $user,Post $post)
    {
        return view('posts/index')->with(['grade' => $grade, 'classx'=>$classx, 'user'=>$user, 'posts'=>$post->get()]);
    }


    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

   
    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image' =>$image];
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
