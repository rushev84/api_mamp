<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}