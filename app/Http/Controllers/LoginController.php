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
        $data = $request->get('email');
//        dd($data);
//        dd(route('blog.index', ['id' => 1]));
//        dd($request->);

        return 'Аутентифицировать пользователя ' . ($request->route()->named('login.store') ? 'yes-login.store' : '');
    }
}
