<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
        ];

        $posts = array_fill(0,10, $post);

        return view('user.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $title = $request->input('title');

        $content = $request->input('content');

//        dd($title, $content);

        alert('Создан новый пост', 'primary');

        return redirect()->route('user.posts.show', 123);

        return 'Сохраниенить новость';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
        ];

        return view('user.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
        ];

        return view('user.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post)
    {
        $title = $request->input('title');

        $content = $request->input('content');

//        dd($title, $content);

        alert('Сохранено');

        return back();

        return redirect()->back();

        return redirect()->route('user.posts.show', 123);

        return 'Редактировать одну новость';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $post)
    {

        return redirect()->route('user.posts');

        return 'Удалить одну новость';
    }

    public function like(string $post)
    {
        return 'Поставить лайк';
    }
}
