<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index/plugins/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <title>le livre</title>
</head>
<body>
    <div class="main">
        @include('livre.header')
        <div class="top-margin">
          <div class="top-content">
            <div class="big-banner">
              <div class="swiper mySwiper swiper2">
                <div class="swiper-wrapper swiper2-wrapper2">
                  <div class="swiper-slide swiper2-slide2"><img src="/index/dist/img/slide/slide5.png"></div>
                  <div class="swiper-slide swiper2-slide2"><img src="/index/dist/img/slide/slide2.png"></div>
                  <div class="swiper-slide swiper2-slide2"><img src="/index/dist/img/slide/slide6.png"></div>
                  <div class="swiper-slide swiper2-slide2"><img src="/index/dist/img/slide/slide7.png"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="discont-baner">
              <div class="discont-content">
                <div class="discont-title"><h1 class="discont-title-h1">Популярные книги месяца</h1></div>
                <div class="discont-swiper">
                  <div class="swiper mySwiper1 swiper1">
                    <div class="swiper-wrapper swiper1-wrapper1">
                      <div class="swiper-slide swiper1-slide1"><img src="/index/dist/img/slide1/slide1.png"></div>
                      <div class="swiper-slide swiper1-slide1"><img src="/index/dist/img/slide1/slide2.png"></div>
                      <div class="swiper-slide swiper1-slide1"><img src="/index/dist/img/slide1/slide3.png"></div>
                      <div class="swiper-slide swiper1-slide1"><img src="/index/dist/img/slide1/slide4.png"></div>
                      <div class="swiper-slide swiper1-slide1"><img src="/index/dist/img/slide1/slide5.png"></div>
                      <div class="swiper-slide swiper1-slide1"><img src="/index/dist/img/slide1/slide6.png"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination swiper-pagination1"></div>
                  </div>
                </div>
              </div>
              <a href="{{route('book.classical')}}" class="btn_discont" style="color: black; text-decoration: none;">
                  <h1 class="items-btn-discont">Больше классических книг</h1>
              </a>
            </div>
          </div>
          <div class="main-list">
            <div class="main-banner">
              <div class="main-banner-left">
                <div class="main-banner-left-img">
                  <img class="img-main-banner img-main-banner1" src="/index/dist/img/writer/banner2.png" alt="">
                </div>
                <p class="p-img-main-banner">Жюль Габрие́ль Верн — французский писатель, классик приключенческой литературы, один из основоположников жанра научной фантастики. Член Французского Географического общества. По статистике ЮНЕСКО, книги Жюля Верна занимают второе место по переводимости в мире, уступая лишь произведениям Агаты Кристи.</p>
              </div>
              <div class="main-banner-right">
                <div class="main-banner-right-img">
                  <img class="img-main-banner img-main-banner2" src="/index/dist/img/writer/banner3.png" alt="">
                </div>
                <p class="p-img-main-banner">Алекса́ндр Дюма́ — французский писатель, драматург и журналист. Один из самых читаемых французских авторов, мастер приключенческого романа. Две самые известные его книги — «Граф Монте-Кристо» и «Три мушкетёра» — были написаны в 1844—1845 гг.</p>
              </div>
            </div>
            <div class="list-product">
              <div class="cards">
                  @yield('content')
              </div>
            </div>
            <div class="footer">
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
                <li class="li-footer-center"><a class="a-footer-center" href="{{ route('book.classical') }}">Бестселеры</a></li>
                <li class="li-footer-center"><a class="a-footer-center" href="{{ route('book.classical') }}">Мировая классика</a></li>
                <li class="li-footer-center"><a class="a-footer-center" href="{{ route('book.newbook') }}">Новинки</a></li>
                <li class="li-footer-center"><a class="a-footer-center" href="{{ route('book.newbook') }}">Популярные</a></li>
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
        </div>
    </div>
    <script src="/index/plugins/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
