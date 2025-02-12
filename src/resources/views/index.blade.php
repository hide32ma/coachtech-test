<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')



<div class="contact-form__content">
    <h2 class="contact-form__heading">
        Contact
    </h2>


<form class="form" action="/confirm" method="post">

@csrf

<input type="hidden" name="category_id">


<!-- お名前 -->
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
        </div>

            <div class="form__group-content">
                <div class="form__input--text">

                <!-- old関数 -->
                <input type="text" name="first_name" placeholder=" 例:山田" value="{{ old('first_name') }}" />

                <!-- old関数 -->
                <input type="text" name="last_name" placeholder=" 例:太朗" value="{{ old('last_name') }}" />

                </div>
            </div>
                <div class="form__error">
                <!--バリデーション-->
                @error('first_name')
                {{ $message }}
                @enderror
                </div>

                <div class="form__error">
                <!--バリデーション-->
                @error('last_name')
                {{ $message }}
                @enderror
                </div>
    </div>




<!-- 性別 -->
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">性別</span>
        </div>
            <div class="form__group-content">
                <div class="form__input--text">

                <!-- old関数 -->
                 <input type="radio" name="gender" value="male" {{ old('gender', 'male') == 'male' ? 'checked' : ''}}>男性

                <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : ''}}>女性
            

                <!-- <input type="radio" name="gender" value="{{ old('gender') }}" />女性 -->
            

                <!-- <input type="radio" name="gender" value="{{ old('gender') }}" />その他 -->

                <input type="radio" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : ''}}>その他
                </div>

                <div class="form__error">
                <!--バリデーション-->
                @error('gender')
                {{ $message }}
                @enderror
                </div>
            </div>
    </div>



<!-- メールアドレス -->
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
        </div>
            <div class="form__group-content">
                <div class="form__input--text">

                <!-- old関数 -->
                <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                </div>

                <div class="form__error">
                <!--バリデーション-->
                @error('email')
                {{ $message }}
                @enderror
                </div>
            </div>
    </div>

<!-- 電話番号 -->
<!-- 出来ていない -->
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
        </div>
            <div class="form__group-content">
                <div class="form__input--text">

                    <!-- old関数 -->
                    <input type="tel" name="tel" placeholder="08012345678"  value="{{ old('tel') }}" />
                </div>

                    <div class="form__error">
                    <!--バリデーション-->
                    @error('tel')
                    {{ $message }}
                    @enderror
                    </div>
            </div>
    </div>

<!-- 住所 -->
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">住所</span>
        </div>
            <div class="form__group-content">
                <div class="form__input--text">

                <!-- old関数 -->
                <input type="text" name="address" placeholder=" 例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>

                <div class="form__error">
                <!--バリデーション-->
                @error('address')
                {{ $message }}
                @enderror
                </div>
            </div>
    </div>

<!-- 建物名 -->
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">

            <!-- old関数 -->
            <input type="text" name="building" placeholder=" 例:千駄ヶ谷マンション" value="{{ old('building') }}" />
            </div>
        </div>
    </div>


<!-- お問い合わせの種類 -->
 <!-- 出来てない -->
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
        </div>


        <div class="form__group-content">
            <div class="form__input--text">


            <input type="text" list="details" name="details" placeholder=" 選択してください">
            <datalist id="details">
                <option value="商品のお届けについて">
                <option value="商品の交換について">
                <option value="商品トラベル">
                <option value="ショップへのお問い合わせ">
                <option value="その他">
                </option>
            </div>

                <div class="form__error">
                <!--バリデーション-->
                @error('details')
                {{ $message }}
                @enderror
                </div>
        </div>
    </div>


<!-- お問い合わせ内容 -->
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">

            <!-- old関数 -->
            <input type="tel" name="detail" placeholder=" お問い合わせ内容をご確認ください"  value="{{ old('detail') }}" />
            </div>

            <div class="form__error">
            <!--バリデーション-->
            @error('detail')
            {{ $message }}
            @enderror
            </div>
        </div>
    </div>


    <div class="form__button">
        <button class="form__button-submit" type="submit">確認画面</button>
    </div>





</form>



</div>
@endsection


