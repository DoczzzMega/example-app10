@extends('layouts.base')

@section('page.title', 'Авторизация')

@section('content')

    <section>
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-sm-6 col-12">

                    <div class="card pt-3 pb-3 bg-body-secondary">

                        <x-card-header>
                            {{ __('Вход') }}
                        </x-card-header>

                        <x-card-body>
                            <x-form action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <x-form-item required>

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


                                <x-button type="submit" color="success" size="lg">
                                    {{ __('Войти') }}
                                </x-button>

                            </x-form>
                        </x-card-body>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
