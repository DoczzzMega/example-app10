<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request,)
    {
        $name = $request->input('name');

        $email = $request->input('email');

        $password = $request->input('password');

        $passwordConfirmation = $request->input('password_confirmation');

        $agreement = $request->boolean('agreement');

//        dd($name, $email, $password, $passwordConfirmation, $agreement);

        if (!true) {
            return back()->withInput();
        }
//        $currency = new Currency;
        $currency = Currency::first();
//        $currency = $currency->toArray();
        dd($currency);

        return 'Зарегистрировать пользователя';
    }
}
