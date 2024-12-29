
<header class="py-3 border-bottom">

    <div class="container">
        <div class="d-flex justify-content-between">

            <div>
                <a href="{{ route('home') }}">Главная</a>
                <a class="ms-3" href="{{ route('blog.index') }}">Блог</a>
            </div>
            Шапка сайта
            <div>
                <ul class="d-flex list-unstyled">
                    <li class="ms-3"><a href="{{ route('register.index') }}">Регистрация</a></li>
                    <li class="ms-3"><a href="{{ route('login') }}">Вход</a></li>
                </ul>
            </div>

        </div>
    </div>

</header>
