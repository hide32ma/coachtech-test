<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- sanitize.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

    <!-- admin.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />

</head>

<body>
    <header class="header">
        <h1 class="header-ttl">FashionablyLate</h1>
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li class="header-nav-item">
                    <a class="header-nav-item-logout" href="">logout</a>
                </li>
            </ul>
        </nav>
    </header>

<main>

<div class="admin-form">
    <div class="admin-form-heading">
        <h2 class="admin-form-heading-name">Admin</h2>
    </div>

    <div class="admin-search-form-name_email"></div>
            <div>
            <!-- old関数 -->
            <input type="text" class="input-text-name_email" name="name_email" placeholder="名前やメールアドレスを入力してください" value="{{ old('name_email') }}" />
            </div>

    <div class="admin-search-form-gender"></div>
            <div>
            <!-- old関数 -->
            <input type="text" list="gender" name="gender" class="input-text-gender" placeholder="性別">
            <datalist id="gender">
            <option value="男性">
            <option value="女性">
            <option value="その他">
            </div>

    <div class="admin-search-form-details"></div>
            <div>
            <!-- old関数 -->
            <input type="text" list="details" name="details" class="input-text-details" placeholder="お問い合わせの種類">
            <datalist id="details">
            <option value="商品のお届けについて">
            <option value="商品の交換について">
            <option value="商品トラベル">
            <option value="ショップへのお問い合わせ">
            <option value="その他">
            </option>
            </div>

    <div class="admin-search-form-year"></div>
            <div>
                <input type="date" list="details" name="year" class="input-date-year" placeholder="年/月/日">
            </div>

            <div class="search-button">
        <button class="search-button-submit" type="submit">検索</button>
        </div>

        <div class="reset-button">
        <input type="reset" class="reset-button-submit" type="submit"></input>
        </div>

    <div class="search-form-list"></div>





</div>
</main>
</body>

</html>