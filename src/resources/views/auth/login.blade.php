@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/login.css">
@endsection

@section('header')
<a class="header-nav__link" href="/register">register</a>
@endsection

@section('content')
<div class="content">
    <div class="content__title">
        <h2>Login</h2>
    </div>
    <div class="content__item">
        <form class="login-form" action="/login" method="post">
            @csrf
            <div class="login-form__email">
                <label for="email">メールアドレス</label>
                <input class="login-form__email-input" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="例: test@example.com">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="login-form__pass">
                <label for="password">パスワード</label>
                <input class="login-form__pass-input" type="password" name="password" id="password" placeholder="例: coachtech1106">
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <div class="login-form__button">
                <input class="login-form__button-submit" type="submit" value="ログイン">
            </div>
        </form>
    </div>
</div>
@endsection