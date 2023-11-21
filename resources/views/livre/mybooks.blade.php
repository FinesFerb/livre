<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="/list_product/plugins/list-product.css">--}}
    <link rel="stylesheet" href="/index/plugins/index.css">
    <link rel="stylesheet" href="/index/plugins/search.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="main" style="height: auto; display: flex; flex-direction: column; background: #fffdfd;">
@include('livre.header')
    <div class="main_list">
        <h1 class="title_h1" style="text-align: center">Мои книги</h1>
        <div class="capt" style="border-bottom: 1px solid #858484;background: 0; border-radius: 0;">
            <span class="span_search">Книги </span>
            <span class="span_search">Подборки </span>
        </div>
        <div class="flex-listok">
            <div class="cards" style="margin-left: 0px">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="footer" style="margin-top: 25vh;">
        <div class="footer-left">
            <div class="title-footer-left title-footer">
                <h1>Наши соцсети:</h1>
            </div>
            <li class="footer-left-item"><a class="a-footer-left-item" href="">Ютуб</a></li>
            <li class="footer-left-item"><a class="a-footer-left-item" href="">Вконтакте</a></li>
            <li class="footer-left-item"><a class="a-footer-left-item" href="">Телеграм</a></li>
            <li class="footer-left-item"><a class="a-footer-left-item" href="">Дзен</a></li>
        </div>
        <div class="footer-center">
            <div class="title-footer-center title-footer">
                <h1>Что почитать?</h1>
            </div>
            <li class="li-footer-center"><a class="a-footer-center" href="">Бестселеры</a></li>
            <li class="li-footer-center"><a class="a-footer-center" href="">Мировая классика</a></li>
            <li class="li-footer-center"><a class="a-footer-center" href="">Новинки</a></li>
            <li class="li-footer-center"><a class="a-footer-center" href="">Популярные</a></li>
        </div>
        <div class="footer-right">
            <div class="title-footer-right title-footer">
                <h1>Помощь</h1>
            </div>
            <li class="li-footer-right"><a class="a-footer-right" href="">Поддержка</a></li>
            <li class="li-footer-right"><a class="a-footer-right" href="">Как оформить подписку</a></li>
            <li class="li-footer-right"><a class="a-footer-right" href="">Напишите нам</a></li>
            <li class="li-footer-right"><a class="a-footer-right" href="">Пользовательское соглашение</a></li>
        </div>
    </div>
</div>
{{--<script src="/list_product/plugins/list-product.js"></script>--}}
<script src="/index/plugins/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

