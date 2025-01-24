<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request,)
    {

        $validated = $request->validate([

            'name' => ['required', 'string', 'max:50'],

            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],

            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],

            'agreement' => ['accepted'],

        ]);

//        $user = new User();
//
//        $user->name = $validated['name'];
//
//        $user->email = $validated['email'];
//
//        $user->password = bcrypt($validated['password']);

//        $user->save();

//        dd(User::query()); // объект query builder

        User::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

//        $user = new User(['name' => $validated['name']]);
//
//        $user->fill(['email' => $validated['email']]);
//
//        $user->setAttribute('password', bcrypt($validated['password']));
//
//        $user->admin = true;
//
//        dd($user->toArray());

//        $currency = Currency::first();
//        $currency = $currency->toArray();
//        dd($currency);

        return redirect()->route('user');
    }
}
