@extends('layouts.default')

@section('title', 'Авторизация')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h3>Авторизация</h3>

            <form action="{{ route('auth.signin') }}" method="post" role="form" class="form-vertical">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="control-label">Логин</label>
                    <input type="text" id="username" name="username" class="form-control" value="{{ Request::old('username') ?: '' }}">
                    @if ($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Пароль</label>
                    <input type="password" id="password" name="password" class="form-control">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rememver"> Запомнить меня
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Войти</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>

@endsection