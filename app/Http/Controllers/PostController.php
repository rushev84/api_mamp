<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function single($post_slug)
    {
        $post = Post::where('slug', $post_slug)->first();

        return response()->json($post);
    }

    public function category($categoryId)
    {
        $category = Category::find($categoryId);

        return response()->json($category->posts);
    }
}
