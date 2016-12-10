@extends('layouts.default')

@section('title', 'Регистрация')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h3>Регистрация</h3>

            <form action="{{ route('auth.signup') }}" method="post" role="form" id="reg-form" class="form-vertical">
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label for="first_name" class="control-label">Имя</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{ Request::old('first_name') ?: '' }}">
                    @if ($errors->has('first_name'))
                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label for="last_name" class="control-label">Фамилия</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ Request::old('last_name') ?: '' }}">
                    @if ($errors->has('last_name'))
                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ Request::old('email') ?: '' }}">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="control-label">Логин</label>
                    <input type="text" id="username" name="username" class="form-control" value="{{ Request::old('username') ?: '' }}">
                    @if ($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                    <label for="birthday" class="control-label">Дата рождения</label>
                    <input type="text" id="birthday" name="birthday" class="form-control" value="{{ Request::old('birthday') ?: '' }}">
                    @if ($errors->has('birthday'))
                        <span class="help-block">{{ $errors->first('birthday') }}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone" class="control-label">Мобильный телефон</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ Request::old('phone') ?: '' }}" placeholder="380 - 973333333">
                    @if ($errors->has('phone'))
                        <span class="help-block">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Пароль</label>
                    <input type="password" id="password" name="password" class="form-control">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Зарегистрироваться</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function($){
            $("#phone").mask("999 - 999999999");
        });
    </script>
@endsection