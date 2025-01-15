@extends('layouts.base')

@section('page.title', 'Авторизация')

@section('content')

    <section>
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-sm-6 col-12">

                    <div class="card pt-3 pb-3 bg-body-secondary">

                        <div class="card-body">

                            <h5 class="card-title ">
                                {{ __('Вход') }}
                            </h5>

                        </div>

                        <div class="card-body">

                            <form action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">

                                    <label for="email" class="form-label required">
                                        {{ __('Email адрес') }}
                                    </label>

                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" autofocus>

                                    <div id="emailHelp" class="form-text">
                                        {{ __('Мы никогда не передадим вашу электронную почту кому-либо еще.') }}
                                    </div>

                                </div>

                                <div class="mb-3">

                                    <label for="password" class="form-label required">
                                        {{ __('Пароль') }}
                                    </label>

                                    <input type="password" name="password" class="form-control" id="password">

                                </div>

                                <div class="mb-4 form-check">

                                    <input type="checkbox" name="remember" value="1" class="form-check-input" id="remember">

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>

                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Войти') }}
                                </button>

                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
