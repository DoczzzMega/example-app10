<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(Request $request)
    {

//        /** @var Post $post */ //будут подсказки при написании метода в объекте $post
//
//        $post = Post::query()->first();
//
//        $post->getAttribute('foo');
//
//        $post->title;
//
//        dd($post->published_at);
//
//        dd($post->isPublished());



        // select * from posts
        $posts = Post::all();

        //select id, title, published_at from posts
        $posts = Post::all(['id', 'title', 'published_at']);

        // select * from posts
        $posts = Post::query()->get();

        //select id, title, published_at from posts
        $posts = Post::query()->get(['id', 'title', 'published_at']);

        // select * from posts limit 12
        $posts = Post::query()->limit(12)->get();

        //алиас limit
        $posts = Post::query()->take(12)->get();

        // select * from posts limit 12 offset 12
        $posts = Post::query()->limit(12)->offset(12)->get();

        //алиас offset
        $posts = Post::query()->take(12)->skip(12)->get();

        $validated = $request->validate([

            'limit' => ['nullable', 'integer', 'between:1,100'],

            'page' => ['nullable', 'integer', 'between:1,100'],

        ]);

        $limit = $validated['limit'] ?? 12;

        $page = $validated['page'] ?? 1;

        $offset = $limit * ($page - 1);

        $posts = Post::query()->limit($limit)->offset($offset)->get();

        $posts = Post::query()->paginate(12, ['id', 'title', 'published_at']);

        // select * from posts order by published_at desc

        $posts = Post::query()->orderBy('published_at', 'desc')->paginate($limit);

        $posts = Post::query()->latest('published_at')->paginate($limit); //короткий алиас

        $posts = Post::query()->oldest('id')->paginate($limit); //короткий алиас

        $posts = Post::query()->latest('published_at')
            ->oldest('id')->paginate($limit);

        $posts = Post::query()->latest()->paginate($limit); //без параметра сортирует по колонке created_at/нужно часто

        $posts = Post::query()->latest('published_at')->paginate($limit);



//        $posts = $posts->toArray();

//        dd($posts);

//        $post = (object) [
//            'id' => 123,
//            'title' => 'Lorem ipsum dolor sit amet.',
//            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
//            'category_id' => 1,
//        ];
//
//        $posts = array_fill(0,10, $post);

//        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
//
//            if($search && ! str_contains(strtolower($post->title), strtolower($search))) {
//                return false;
//            }
//
//            if($category_id && $post->category_id != $category_id) {
//                return false;
//            }
//
//            return true;
//
//        });

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

