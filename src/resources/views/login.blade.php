<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

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


    <!-- laravel 3-5の記述コピー -->
<form class="form" action="/login" method="post">

    @csrf








</form>
</div>
</main>
</body>
</html>