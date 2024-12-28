<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return view('welcome');
        return 'Главная - новости';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Страница создания новости';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Сохраниение новости';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        return 'Показать одну новость ' . $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        return 'Страница редактирования новости ' . $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post)
    {
        return 'Редактировать одну новость';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $post)
    {
        return 'Удалить одну новость';
    }

    public function like(string $post)
    {
        return 'Поставить лайк';
    }
}
