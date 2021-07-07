<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="SEAM,管理アプリ,製造管理アプリ,クラウド管理,製造業DX,製造業,製品データ管理,社内受注管理">
    <meta name="description" content="SEAM(シーム)は、製造業に特化して管理アプリです。製造業の社内受注や予定管理、製品データを管理するアプリです。メールやFAXは辞めて社内受注を簡単にし最大限に効率化">
    <meta property="og:title" content="製造管理アプリ『SEAM』- SEAM(シーム">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ja_JP">
    <meta name="robots" content="noindex">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon/ファビコン.jpg') }}"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_package_v0.16/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_package_v0.16/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_package_v0.16/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon_package_v0.16/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon_package_v0.16/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- 郵便番号検索 -->
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <title>製造管理ツール『SEAM』- SEAM(シーム）</title>
</head>
<header>
    <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/top">
            <img src="../storage/navTOPlog2.svg" width="150" height="30" alt="">
        </a>
        <a name="link-8"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/top">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#link-9">特徴</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#link-10">機能</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/price">料金プラン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/project">事業概要</a>
                </li>
            </ul>
        </div>
        <h4 class="mr-3">TEL 050-6880-1821</h4>
        <a href="/Inquiry"><button type="button" class="btn btn-danger">お問い合わせ</button></a>
    </nav>
</header>

<body>



    @yield('content')



</body>
<footer class="bg-secondary text-center text-white">
    <div class="container-fluid">
        <div class="row">
            <img class="mx-auto" src="../storage/footerLog3.svg" width="250" height="150" alt="">
        </div>
        <span class="d-none d-md-block">
            <ul id="f-nav" class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link py-0 mx-3" href="/top">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-0 mx-3" href="/top#link-9">特徴</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-0 mx-3" href="/top#link-10">機能</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-0 mx-3" href="/top#link-11">料金プラン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-0 mx-3" href="/Inquiry">お問い合わせ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-0 mx-3" href="/project">事業概要</a>
                </li>
            </ul>
        </span>
        <div class="row">
            <p class="mx-auto">Copyright &thinsp; &copy; 2021 &thinsp; SEAM.co.ltd.</p>
        </div>
    </div>
</footer>

</html>
