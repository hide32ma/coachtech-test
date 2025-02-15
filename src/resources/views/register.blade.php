<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <!-- sanitize.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

    <!-- register.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />

</head>



<body>
    <header class="header">
        <h1 class="header-ttl">FashionablyLate</h1>
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li class="header-nav-item">
                    <a class="header-nav-item-login" href="/login">login</a>
                </li>
            </ul>
        </nav>
    </header>



<main>

<!-- バリデーションの表示位置が表示して欲しいところに表示しない為 -->
<div class="form-error-name">
                <!--バリデーション-->
                @error('name')
                {{ $message }}
                @enderror
                </div>

<div class="form-error-email">
                <!--バリデーション-->
                @error('email')
                {{ $message }}
                @enderror
                </div>

<div class="form-error-password">
                <!--バリデーション-->
                @error('password')
                {{ $message }}
                @enderror
                </div>


<div class="register-form">
    <div class="register-form-heading">
        <h2 class="register-form-heading-name">Register</h2>
    </div>




<form class="form" action="/login" method="post">

    @csrf

<!-- 親要素にする事により動きがおかしくなってしまう 知識不足 -->

    <div class="register-form-menus"></div>
        <div class="register-form-menus-box">

<!-- お名前 -->
            <div class="register-form-name-box">
                <div class="register-form-name">
                お名前
                </div>

                <div class="form-input-text-name">
                <!-- old関数 -->
                <input type="text" class="input-text_name" name="name" placeholder=" 例:山田 太朗" value="{{ old('name') }}" />
                </div>

                <!-- <div class="form-error-name"> -->
                <!--バリデーション-->
                <!-- @error('name') -->
                <!-- {{ $message }} -->
                <!-- @enderror -->
                <!-- </div> -->
            </div>


<!-- メールアドレス -->

            <div class="register-form-email-box">
                <div class="register-form-email">
                メールアドレス
                </div>

                <div class="form-input-text-email">
                <!-- old関数 -->
                <input type="email" class="input-text_email" name="email" placeholder=" 例: test@example.com" value="{{ old('email') }}" />
                </div>

                <!-- <div class="form-error-email"> -->
                <!--バリデーション-->
                <!-- @error('email') -->
                <!-- {{ $message }} -->
                <!-- @enderror -->
                <!-- </div> -->
            </div>


<!-- パスワード -->
            <div class="register-form-password-box">
                <div class="register-form-password">
                パスワード
                </div>

                <div class="form-input-text-password">
                <!-- old関数 -->
                <input type="password" class="input-text_password" name="password" placeholder=" 例: coachtech1106" value="{{ old('password') }}" />
                </div>

                <!-- <div class="form-error-password"> -->
                <!--バリデーション-->
                <!-- @error('password') -->
                <!-- {{ $message }} -->
                <!-- @enderror -->
                <!-- </div> -->
            </div>

        </div>

<!-- 登録ボタン -->

        <div class="form-button">
        <button class="form-button-submit" type="submit">登録</button>
        </div>






</form>
</div>
</main>
</body>
</html>