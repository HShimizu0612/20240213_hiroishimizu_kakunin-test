@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/admin.css">
@endsection

@section('header')
<nav>
    <ul class="header-nav">
        <li class="header-nav__item">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="header-nav__button" type="submit">logout</button>
            </form>
        </li>
    </ul>
</nav>
@endsection

@section('content')
<div class="content">
    <div class="content__item">
        <div class="content__title">
            <h2>Admin</h2>
        </div>
        <form class="search-form" action="/admin" method="get">
            @csrf
            <div class="search-form__text">
                <input class="search-form__text-input" type="text" name="keyword" value="{{ old('keyword') }}" placeholder="名前やメールアドレスを入力してください">
            </div>
            <div class="search-form__gender">
                <select class="search-form__gender-select" name="gender">
                    <option value="" disabled selected>性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
            </div>
            <div class="search-form__category">
                <select class="search-form__category-select" name="category">
                    <option value="" disabled selected>お問い合わせの種類</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search-form__date">
                <input class="search-form__date-input" type="date" name="date" placeholder="年/月/日">
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-reset" type="">リセット</button>
            </div>
        </form>
        <div class="exports">
            <div class="export">
                <button class="export__button">エクスポート</button>
            </div>
            <div class="pagination">
                {{ $contacts->links() }}
            </div>
        </div>
        <div class="search-result">
            <table class="result-table">
                <tr>
                    <th class="result-table__name">お名前</th>
                    <th class="result-table__gender">性別</th>
                    <th class="result-table__email">メールアドレス</th>
                    <th class="result-table__category">お問い合わせの種類</th>
                    <th class="result-table__detail"></th>
                </tr>
                @foreach($contacts as $contact)
                <tr>
                    <td class="result-table__name-item">
                        <p>{{ $contact->last_name }}</p>
                        <p>　</p>
                        <p>{{ $contact->first_name }}</p>
                    </td>
                    <td class="result-table__gender-item">
                        {{ $contact->gender }}
                    </td>
                    <td class="result-table__email-item">
                        {{ $contact->email }}
                    </td>
                    <td class="result-table__category-item">
                        {{ $contact->category }}
                    </td>
                    <td class="result-table__detail">
                        <button class="result-table__detail-submit">詳細</button>
                    </td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection