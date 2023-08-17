<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
       return view('admin.posts.index', [
           'posts' => Post::all(),
       ]);
   }

   public function show($id)
   {
       return view('admin.posts.show', [
           'post' => Post::find($id),
       ]);
   }

    public function edit($id)
    {
        return view('admin.posts.edit', [
            'post' => Post::find($id),
            'categories' => Category::all(),
        ]);
    }

    public function store($id, Request $request)
    {
        $image = $request->file('image');
        $fileName = uniqid('', true) . '_' . $image->getClientOriginalName();
        $destination = storage_path('app/public/upload');
        $image->move($destination, $fileName);

        $post = Post::find($id);
        $post->id = $request->input('id');
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->slug = $request->input('slug');
        $post->image = '/storage/upload/' . $fileName;
        $post->save();

        return redirect()->route('admin.posts.show', $post->id);
    }
}
