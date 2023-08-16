<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function posts()
   {
       return view('admin.posts', [
           'posts' => Post::all(),
       ]);
   }
}
