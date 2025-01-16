@extends('layouts.auth')

@section('page.title', 'Авторизация')

@section('auth.content')

    <x-card>

        <x-card-header>

            <x-card-title>
                {{ __('Вход') }}
            </x-card-title>

            <x-slot name="right">

                <a href="{{ route('register.index') }}">
                    {{ __('Регистрация') }}
                </a>

            </x-slot>

        </x-card-header>

        <x-card-body>
            <x-form action="{{ route('login.store') }}" method="POST">
                @csrf
                <x-form-item>

                    <x-form-label for="email" required>
                        {{ __('Email адрес') }}
                    </x-form-label>

                    <x-form-input type="email" name="email" id="email" aria-describedby="emailHelp" autofocus/>

                    <div id="emailHelp" class="form-text">
                        {{ __('Мы никогда не передадим вашу электронную почту кому-либо еще.') }}
                    </div>

                </x-form-item>

                <x-form-item>

                    <x-form-label for="password" required>
                        {{ __('Пароль') }}
                    </x-form-label>

                    <x-form-input type="password" name="password" id="password" />

                </x-form-item>

                <x-form-item :mb="4">

                    <x-form-checkbox name="remember" connectorId="remember">
                        {{ __('Запомнить меня') }}
                    </x-form-checkbox>

                </x-form-item>


                <x-button type="submit">
                    {{ __('Войти') }}
                </x-button>

            </x-form>
        </x-card-body>

    </x-card>

@endsection
