<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page');
        $perPage = 10; // Количество записей на странице
        $offset = ($page - 1) * $perPage;

        $posts = Post::orderBy('order', 'asc')
            ->skip($offset)
            ->take($perPage)
            ->get();

        return response()->json($posts);
    }
}
