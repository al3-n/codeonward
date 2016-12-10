<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ route('home') }}" class="navbar-brand">Code</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('contacts') }}">Контакты</a></li>
                @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="user-avatar-small" src="/upload/avatars/{{ Auth::user()->avatar }}" alt="avatar"> {{ Auth::user()->getName() }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile.edit') }}">Обновить профиль</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('auth.signout') }}">Выйти</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('auth.signin') }}">Войти</a></li>
                    <li><a href="{{ route('auth.signup') }}">Регистрация</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>