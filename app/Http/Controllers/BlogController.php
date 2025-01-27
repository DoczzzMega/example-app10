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



//        // select * from posts
//        $posts = Post::all();
//
//        //select id, title, published_at from posts
//        $posts = Post::all(['id', 'title', 'published_at']);
//
//        // select * from posts
//        $posts = Post::query()->get();
//
//        //select id, title, published_at from posts
//        $posts = Post::query()->get(['id', 'title', 'published_at']);
//
//        // select * from posts limit 12
//        $posts = Post::query()->limit(12)->get();
//
//        //алиас limit
//        $posts = Post::query()->take(12)->get();
//
//        // select * from posts limit 12 offset 12
//        $posts = Post::query()->limit(12)->offset(12)->get();
//
//        //алиас offset
//        $posts = Post::query()->take(12)->skip(12)->get();

        $validated = $request->validate([

            'limit' => ['nullable', 'integer', 'between:1,100'],

            'page' => ['nullable', 'integer', 'between:1,10000'],

        ]);

//        $limit = $validated['limit'] ?? 12;
//
//        $page = $validated['page'] ?? 1;
//
//        $offset = $limit * ($page - 1);
//
//        $posts = Post::query()->limit($limit)->offset($offset)->get();
//
//        $posts = Post::query()->paginate(12, ['id', 'title', 'published_at']);
//
//        // select * from posts order by published_at desc
//
//        $posts = Post::query()->orderBy('published_at', 'desc')->paginate($limit);
//
//        $posts = Post::query()->latest('published_at')->paginate($limit); //короткий алиас
//
//        $posts = Post::query()->oldest('id')->paginate($limit); //короткий алиас
//
//        $posts = Post::query()->latest('published_at')
//            ->oldest('id')->paginate($limit);
//
//        $posts = Post::query()->latest()->paginate($limit); //без параметра сортирует по колонке created_at/нужно часто

        $posts = Post::query()->latest('published_at')->paginate(12);

        return view('blog.index', compact('posts'));
    }

    function show($post)
    {
//        function show(Post $post) { // route model binding /вызовет под капотом $post = Post::query()->findOrFail($post);
//            return 'шаблон';
//        }

        //select * from posts order by id asc limit 1 //при этом методе всегда желательно указывать сортирвку
//        $post = Post::query()->oldest('id')->first();
//
//        $post = Post::query()
//            ->where('id', 1234)
//            ->oldest('id')
//            ->firstOrFail(['id', 'title', 'published_at']);

//        //select id, title, content where id in (1,2,3)
//        $posts = Post::query()->find([1,2,3], ['id', 'title', 'content', 'published_at']); //findOrFail тут не сработает
//
//        //select id, title, content where id = 123
//        $post = Post::query()->findOrFail($post);

        $post = cache()->remember(

            key: "posts.{$post}",

            ttl: now()->addHour(),

            callback: function () use ($post) {

                info('test');

            return Post::query()->findOrFail($post);

        });



        return view('blog.show', compact('post'));
    }
}

