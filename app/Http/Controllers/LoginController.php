<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

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

    public function store(Request $request, Route $route)
    {
        $email = $request->input('email');

        $password = $request->input('password');

        $remember = $request->boolean('remember');

//        dd($email, $password, $remember);

//        return response()->redirectToRoute('user');  // Просто для понимания, что под капотом

        alert('Добро пожаловать', );

        return redirect()->route('user');

//        return 'Аутентифицировать пользователя ' . ($request->route()->named('login.store') ? 'yes-login.store' : '');
    }
}
