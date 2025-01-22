<?php

namespace App\Http\Controllers;

use App\Rules\Phone;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ValidationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([

            'first_name' => ['required', 'string', 'max:50'],

            'last_name' => ['nullable', 'string', 'max:50'],

            'age' => ['nullable', 'integer', 'min:18', 'max:150'], // 123

            'amount' => ['required', 'numeric', 'min:1', 'max:10000000'], // 123/123.45

            'gender' => ['nullable', 'string', 'in:male,female'],

            'zip_code' => ['nullable', 'string', 'digits:6'], // 123456

            'subscription' => ['nullable', 'boolean'], // true/false/1/0/

            'agreement' => ['accepted'], // true/1/yes/on

            'password' => ['required', 'string', 'min:7', 'confirmed'],

            'password_confirmation' => ['required', 'string', 'min:7', 'confirmed'],

//            'password2' => ['required', 'string', Password::min(7)->letters()->mixedCase()->numbers()->symbols(), 'confirmed'],

            'current_password' => ['required', 'string', 'current_password'], // текущий пароль для подтверждения

            'email' => ['required', 'string', 'email', 'max:50', 'exists:users'], // таблица, а поле придет из атрибута

//            'country_id' => ['required', 'integer', 'exists:countries,id'], // таблица/поле

            'country_id' => ['required', 'integer', Rule::exists('counties', 'id')->where('active', true)], // таблица/поле

            'phone2' => ['required', 'string', new Phone, 'unique:users,phone'], // кастомное решение лучше чем digits_between:10,20, т.к не придется менять во многих местах

            'phone3' => ['required', 'string', 'digits_between:10,20', 'unique:users,phone'],

            'phone' => ['required', 'string', Rule::unique('users', 'phone')->ignore($request->user()->id)],

            'website' => ['nullable', 'string', 'url'], // https://exemple.com/sdfsfds

            'uuid' => ['nullable', 'string', 'uuid'],

            'ip' => ['nullable', 'string', 'ip'], // 127.0.0.1

            'avatar' => ['nullable', 'file', 'image', 'mimes:jpeg,jpg,png', 'max:2048'], // 2Mb/тут mimes лишний т.к есть image

            'birth_date' => ['nullable', 'string', 'date'], // 2025-10-09/09-10-2025 12:30:00  но лучше использовать 'date_format:Y-m-d' вместо date

            'start_date' => ['nullable', 'string', 'date', 'after_or_equal:today'], // например для акции кот вкл админ

            'end_date' => ['nullable', 'string', 'date', 'after:start_date'],

            'services' => ['nullable', 'array', 'min:1', 'max:5'], // [1,2,3,4,5]

            'services.*' => ['required', 'integer'], // [1,2,3,4,5]

            'services2.*' => ['required', 'integer', 'exists:services,id'], // ! уйдут 5 запросов в бд. Так лучше не делать, а вынести эту проверку в другое место

            'delivery' => ['required', 'array', 'size:2'], // дата доставки ['date' => '2021-1-09', 'time' => '12:30:00']

            'delivery.date' => ['required', 'string', 'date_format:Y-m-d'], // 2021-1-09

            'delivery.time' => ['required', 'string', 'date_format:H:i:s'], // 12:30:00

            'secret' => ['required', 'string', function ($attribute, $value, \Closure $fail) {

                if ($value !== config('example.secret')) {

                    $fail(__('Не верный секретный ключ.'));

                }

            }]


        ]);
    }
}
