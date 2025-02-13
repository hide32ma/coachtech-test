<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')



<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>


    <form class="form" action="/confirm" method="post">

@csrf

    <input type="hidden" name="category_id">


    <!-- お名前 -->
    <div class="form__group"></div>
            <div class="form__group-title-name">
                <div class="form__label-item-name">お名前
                </div>
            </div>

                    <div class="form__group-content">

                        <div class="form__input-text-first_name">
                            <!-- old関数 -->
                            <input type="text" name="first_name" placeholder=" 例:山田" value="{{ old('first_name') }}" />
                        </div>

                        <div class="form__input-text-last_name">
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
        




        <!-- 性別 -->
    
        <div class="form__group-title-gender">
            <span class="form__label--item-gender">性別</span>
        </div>
            <div class="form__group-content">
                <div class="form__input--text">


                <!-- old関数 -->
                <!-- 理解できていない -->
                <!-- AIに頼った -->
                <input type="radio" class="input-radio-male" name="gender" value="male" {{ old('gender', 'male') == 'male' ? 'checked' : ''}}>
                <span class="male">男性</span>

                <input type="radio" class="input-radio-female" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : ''}}>
                <span class="female">女性</span>

                <input type="radio" class="input-radio-other" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : ''}}>
                <span class="other">その他</span>

                </div>



                <!-- <input type="radio" name="gender" value="{{ old('gender') }}" />その他 -->

                <div class="form__error">
                <!--バリデーション-->
                @error('gender')
                {{ $message }}
                @enderror
                </div>
            </div>
    



        <!-- メールアドレス -->
    
        <div class="form__group-title">
            <span class="form__label--item-email">メールアドレス</span>
        </div>
            <div class="form__group-content">
                <div class="form__input--text-email">

                <!-- old関数 -->
                <input type="email" class="input-email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                </div>

                <div class="form__error">
                <!--バリデーション-->
                @error('email')
                {{ $message }}
                @enderror
                </div>
            </div>
    

        <!-- 電話番号 -->
        <!-- 出来ていない -->
    
        <div class="form__group-title">
            <span class="form__label--item-tel">電話番号</span>
        </div>
            <div class="form__group-content">
                <div class="form__input--text-tel">

                    <!-- old関数 -->
                    <input type="tel" class="input-tel" name="tel" placeholder="08012345678"  value="{{ old('tel') }}" />
                </div>

                    <div class="form__error">
                    <!--バリデーション-->
                    @error('tel')
                    {{ $message }}
                    @enderror
                    </div>
            </div>
    

        <!-- 住所 -->
    
        <div class="form__group-title">
            <span class="form__label--item-address">住所</span>
        </div>
            <div class="form__group-content">
                <div class="form__input--text-address">

                <!-- old関数 -->
                <input type="text" class="input-address" name="address" placeholder=" 例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>

                <div class="form__error">
                <!--バリデーション-->
                @error('address')
                {{ $message }}
                @enderror
                </div>
            </div>
    

        <!-- 建物名 -->
    
        <div class="form__group-title">
            <span class="form__label--item-building">建物名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text-building">

            <!-- old関数 -->
            <input type="text" class="input-building" name="building" placeholder=" 例:千駄ヶ谷マンション" value="{{ old('building') }}" />
            </div>
        </div>
    


        <!-- お問い合わせの種類 -->
        <!-- 出来てない -->
    
        <div class="form__group-title">
            <span class="form__label--item-details">お問い合わせの種類</span>
        </div>


        <div class="form__group-content">
            <div class="form__input--text-details">


            <input type="text" list="details" name="details" class="input-details" placeholder=" 選択してください">
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
    


        <!-- お問い合わせ内容 -->
    
        <div class="form__group-title">
            <span class="form__label--item-detail">お問い合わせ内容</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text-detail">

            <!-- old関数 -->
            <input type="tel" class="input-detail" name="detail" placeholder=" お問い合わせ内容をご確認ください"  value="{{ old('detail') }}" />
            </div>

            <div class="form__error">
            <!--バリデーション-->
            @error('detail')
            {{ $message }}
            @enderror
            </div>
        </div>
    


    <div class="form__button">
        <button class="form__button-submit" type="submit">確認画面</button>
    </div>





    </form>



</div>
@endsection


