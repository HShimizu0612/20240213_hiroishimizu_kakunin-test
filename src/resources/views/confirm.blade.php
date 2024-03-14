@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/confirm.css">
@endsection

@section('content')
<div class="content">
    <div class="content__title">
        <h2>Confirm</h2>
    </div>
    <div class="content__item">
        <form action="/thanks" method="post">
            @csrf
            <table class="confirm-table">
                <tr>
                    <th>お名前</th>
                    <td class="confirm-table__name">
                        <p>{{ $contact['last_name'] }}</p>
                        <p>　</p>
                        <p>{{ $contact['first_name'] }}</p>
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    </td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td class="confirm-table__gender">
                        {{ $contact['gender'] }}
                        <!-- labelの名前で表示したい -->
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td class="confirm-form__email">
                        {{ $contact['email'] }}
                        <input type="hidden" name="email" value="{{ $contact['email'] }}">
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td class="confirm-form__tel">
                        {{ $contact['tel'] }}
                        <input type="hidden" name="tel" valule="{{ $contact['tel'] }}">
                    </td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td class="confirm-form__address">
                        {{ $contact['address'] }}
                        <input type="hidden" name="address" value="{{ $contact['address'] }}">
                    </td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td class="confirm-form__building">
                        {{ $contact['building'] }}
                        <input type="hidden" name="building" value="{{ $contact['building'] }}">
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td class="confirm-form__category">
                        {{ $category->content }}
                        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td class="confirm-form__detail">
                        {{ $contact['detail'] }}
                        <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                    </td>
                </tr>
            </table>
            <div class="confirm-table__buttons">
                <div class="confirm-table__button">
                    <button class="confirm-table__button-submit">送信</button>
                </div>
                <div class="confirm-table__fix">
                    <a class="confirm-table__fix-link" href="/">修正</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection