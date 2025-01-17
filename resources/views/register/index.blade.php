@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')

    <x-card>

        <x-card-header>

            <x-card-title>
                {{ __('Регистрация') }}
            </x-card-title>


            <x-slot name="right">

                <a href="{{ route('login') }}">
                    {{ __('Вход') }}
                </a>

            </x-slot>

        </x-card-header>

        <x-card-body>
            <x-form action="{{ route('register.store') }}" method="POST">

                <x-form-item>

                    <x-form-label for="name" required>
                        {{ __('Имя') }}
                    </x-form-label>

                    <x-form-input name="name" id="name" aria-describedby="emailHelp" autofocus/>

                </x-form-item>

                <x-form-item>

                    <x-form-label for="email" required>
                        {{ __('Email адрес') }}
                    </x-form-label>

                    <x-form-input type="email" name="email" id="email" />

                </x-form-item>

                <x-form-item>

                    <x-form-label for="password" required>
                        {{ __('Пароль') }}
                    </x-form-label>

                    <x-form-input type="password" name="password" id="password" />

                </x-form-item>

                <x-form-item>

                    <x-form-label for="password" required>
                        {{ __('Пароль еще раз') }}
                    </x-form-label>

                    <x-form-input type="password" name="password_confirmation" id="password_confirmation" />

                </x-form-item>

                <x-form-item :mb="4">

                    <x-form-checkbox name="agreement" connectorId="agreement">
                        {{ __('Я согласен на обработку пользовательских данных') }}
                    </x-form-checkbox>

                </x-form-item>


                <x-button type="submit">
                    {{ __('Войти') }}
                </x-button>

            </x-form>
        </x-card-body>

    </x-card>

@endsection
