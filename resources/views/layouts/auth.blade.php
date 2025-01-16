@extends('layouts.base')

@section('content')

    <section>
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-sm-6 col-12">

                    @yield('auth.content')

                </div>

            </div>

        </div>
    </section>

@endsection
