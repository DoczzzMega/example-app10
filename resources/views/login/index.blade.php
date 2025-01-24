@extends('layouts.auth')

@section('page.title', 'Авторизация')

@section('auth.content')

    <x-errors />

    <x-login.card></x-login.card>

@endsection
