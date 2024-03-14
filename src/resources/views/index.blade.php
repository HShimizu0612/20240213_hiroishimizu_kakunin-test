@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('content')
<div class="content">
    <div class="content__title">
        <h2>Contact</h2>
    </div>
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <table class="contact-form__table">
            <tr>
                <th>お名前 <span>※</span></th>
                <td>
                    <div class="contact-form__name">
                        <input class="contact-form__name-input" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="例: 山田">
                        <input class="contact-form__name-input" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="例: 太郎">
                    </div>
                    <div class="form__error">
                        @error('first__name')
                        {{ $message }}
                        @enderror
                        @error('last__name')
                        {{ $message }}
                        @enderror
                    </div>
                </td>
            </tr>
            <tr>
                <th>性別 <span>※</span></th>
                <td>
                    <input class="contact-form__gender-input" type="radio" name="gender" id="male" value="1" checked>
                    <label for="male">男性</label>
                    <input class="contact-form__gender-input" type="radio" name="gender" id="female" value="2">
                    <label for="female">女性</label>
                    <input class="contact-form__gender-input" type="radio" name="gender" id="else" value="3">
                    <label for="else">その他</label>
                    <div class="form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </td>
            </tr>
            <tr>
                <th>メールアドレス <span>※</span></th>
                <td>
                    <input class="contact-form__email-input" type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </td>
            </tr>
            <tr>
                <th>電話番号 <span>※</span></th>
                <td>
                    <div class="contact-form__tel">
                        <input class="contact-form__tel-input" type="tel" name="tel" value="{{ old('tel') }}" placeholder="08012345678">
                        <!--
                        <p>-</p>
                        <input class="contact-form__tel-input" type="tel" name="tel_2" value="{{ old('tel_2') }}" placeholder="1234">
                        <p>-</p>
                        <input class="contact-form__tel-input" type="tel" name="tel_3" value="{{ old('tel_3') }}" placeholder="5678">
                        -->
                    </div>
                    <div class="form__error">
                        @error('tel')
                        {{ $message }}
                        @enderror
                    </div>
                </td>
            </tr>
            <tr>
                <th>住所 <span>※</span></th>
                <td>
                    <input class="contact-form__address-input" type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>
                    <input class="contact-form__building-input" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
                </td>
            </tr>
            <tr>
                <th>お問い合わせの種類 <span>※</span></th>
                <td>
                    <div class="contact-form__category">
                        <select class="contact-form__category-select" name="category_id">
                            <option value="" disabled selected>選択してください</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form__error">
                        @error('category')
                        {{ $message }}
                        @enderror
                    </div>
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容 <span>※</span></th>
                <td>
                    <textarea class="contact-form__detail-input" name="detail" rows="10" placeholder="お問い合わせ内容をご記入ください"></textarea>
                    <div class="form__error">
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </div>
                </td>
            </tr>
        </table>
        <div class="contact-form__button">
            <input class="contact-form__button-submit" type="submit" value="確認画面">
        </div>
    </form>
</div>
@endsection