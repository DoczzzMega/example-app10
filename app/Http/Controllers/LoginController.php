<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return 'Страница входа в аккаунт ';
    }

    public function store(Request $request)
    {
        return 'Аутентифицировать пользователя';
    }
}
