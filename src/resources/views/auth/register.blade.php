@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/register.css">
@endsection

@section('header')
<a class="header-nav__link" href="/login">login</a>
@endsection

@section('content')
<div class="content">
    <div class="content__title">
        <h2>Register</h2>
    </div>
    <div class="content__item">
        <form class="register-form" action="{{ route('register') }}" method="post">
            @csrf
            <div class="register-form__name">
                <label for="name">お名前</label>
                <input class="register-form__name-input" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="例: 山田　太郎">
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
            <div class="register-form__email">
                <label for="email">メールアドレス</label>
                <input class="register-form__email-input" type="emial" name="email" id="email" value="{{ old('email') }}" placeholder="例: test@example.com">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="register-form__pass">
                <label for="password">パスワード</label>
                <input class="regiser-form__pass-input" type="password" name="password" id="password" placeholder="例: coachtech1106">
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <div class="register-form__button">
                <button class="register-form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection