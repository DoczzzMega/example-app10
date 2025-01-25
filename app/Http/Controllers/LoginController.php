<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index()
    {
        $ip = request()->ip();

        $path = request()->path();

        $url = request()->url();

//        dd(request()->is('login*'), request()->routeIs('login.index'));

        return view('login.index');
    }

    public function store(Request $request)
    {
//        for ($i = 0; $i < 1000; $i++) {
//
//            Post::query()->create([
//                'user_id' => User::query()->value('id'),
//                'title' => fake()->sentence(),
//                'content' => fake()->paragraph(),
//                'published' => true,
//                'published_at' => fake()->dateTimeBetween(now()->subYear(), now()),
//            ]);
//
//        }


//        return response()->redirectToRoute('user');  // Просто для понимания, что под капотом

        alert('Добро пожаловать', );

        return redirect()->route('user');

//        return 'Аутентифицировать пользователя ' . ($request->route()->named('login.store') ? 'yes-login.store' : '');
    }
}
