<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(Request $request)
    {
        $search = $request->input('search');

        $category_id = $request->input('category_id');

//        dd($search, $category_id);

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
            'category_id' => 1,
        ];

        $posts = array_fill(0,10, $post);

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {

            if($search && ! str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }

            if($category_id && $post->category_id != $category_id) {
                return false;
            }

            return true;

        });

        return view('blog.index', compact('posts'));
    }

    function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
        ];
        return view('blog.show', compact('post'));
    }
}

