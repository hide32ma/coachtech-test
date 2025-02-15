<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <!-- sanitize.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

    <!-- login.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

</head>

<body>
    <header class="header">
        <h1 class="header-ttl">FashionablyLate</h1>
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li class="header-nav-item">
                    <a class="header-nav-item-register" href="">register</a>
                </li>
            </ul>
        </nav>
    </header>

<main>

<div class="login-form">
    <div class="login-form-heading">
        <h2 class="login-form-heading-name">Login</h2>
    </div>


<!-- バリデーションに引っかかるとエラーになってしまう -->
<!-- 前のページまでは問題なし -->
 <!-- 原因がわからない -->


<form class="form" action="/admin" method="post">

    @csrf

<!-- 親要素にする事により動きがおかしくなってしまう 知識不足 -->

    <div class="login-form-menus"></div>
        <div class="register-form-menus-box">


<!-- メールアドレス -->
            <div class="login-form-email-box">
                <div class="login-form-email">
                メールアドレス
                </div>

                <div class="form-input-text-email">
                <!-- old関数 -->
                <input type="email" class="input-text_email" name="email" placeholder=" 例: test@example.com" value="{{ old('email') }}" />
                </div>

                 <div class="form-error-email">
                <!-- バリデーション -->
                 @error('email')
                {{ $message }}
                @enderror
                </div>
            </div>


<!-- パスワード -->
            <div class="login-form-password-box">
                <div class="login-form-password">
                パスワード
                </div>

                <div class="form-input-text-password">
                <!-- old関数 -->
                <input type="password" class="input-text_password" name="password" placeholder=" 例: coachtech1106" value="{{ old('password') }}" />
                </div>

                <div class="form-error-password">
                <!-- バリデーション -->
                @error('password')
                {{ $message }}
                @enderror
                </div>
            </div>

        </div>


<!-- ログインボタン -->

        <div class="form-button">
        <button class="form-button-submit" type="submit">ログイン</button>
        </div>

</form>

</div>

</main>

</body>

</html>