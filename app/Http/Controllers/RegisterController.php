<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        $email = $request->input('email');

        $password = $request->input('password');

        $passwordConfirmation = $request->input('password_confirmation');

        $agreement = $request->boolean('agreement');

//        dd($name, $email, $password, $passwordConfirmation, $agreement);

        if (true) {
            return back()->withInput();
        }


        return 'Зарегистрировать пользователя';
    }
}
