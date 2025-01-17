<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request, Route $route)
    {
        $email = $request->input('email');

        $password = $request->input('password');

        $remember = $request->boolean('remember');

        dd($email, $password, $remember);

//        return 'Аутентифицировать пользователя ' . ($request->route()->named('login.store') ? 'yes-login.store' : '');
    }
}
