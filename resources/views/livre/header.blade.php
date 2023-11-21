<div class="header">
    <div class="header-left">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none; background: left;">
            <img class="header-icon" src="/index/dist/img/icon/catalog.svg" alt="catalog">
        </button>
        <!-- Модальное окно -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Категории</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <a style="text-decoration: none; color: #0a0e14" href="{{ route('book.classical') }}">Классика</a>
                        <hr>
                        <a style="text-decoration: none; color: #0a0e14" href="{{ route('book.newbook') }}">Новинка</a>
                        <hr>
                        <a style="text-decoration: none; color: #0a0e14" href="{{ route('book.travel') }}">Приключение</a>
                        <hr>
                        <a style="text-decoration: none; color: #0a0e14" href="">Детекив</a>
                        <hr>
                        <a style="text-decoration: none; color: #0a0e14" href="">Фантастика</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-center">
        <a href="/"><img class="logo" src="/index/dist/img/icon/logo.svg" alt="logo"></a>
        <div class="search">
            <form class="forma" action="{{ route('search') }}" method="get">
                <input class="search-form" name="s" id="s" placeholder="Искать здесь..." type="search">
                <button type="submit" class="search-btn"><img class="img-search-btn" src="/index/dist/img/icon/search.svg" alt=""></button>
            </form>
        </div>
    </div>
    <div class="header-right">
{{--        <a href=""><img class="header-icon" src="/index/dist/img/icon/like.svg" alt=""></a>--}}
        <!-- <img class="header-icon" src="/index/dist/img/icon/cart.svg" alt=""> -->
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href=""><img class="header-icon" src="/index/dist/img/icon/heart1.svg" alt=""></a>
                @else
                    <a href="{{ route('login') }}"><img class="header-icon" src="/index/dist/img/icon/like.svg" alt=""></a>
                @endauth
            </div>
        @endif
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
{{--                    @include('livre.dropdown')--}}
                    <a href="{{ route('profile.edit') }}"><img class="header-icon" src="/index/dist/img/icon/user.svg" alt=""></a>
                @else
                    <a href="{{ route('login') }}"><img class="header-icon" src="/index/dist/img/icon/profile.svg" alt=""></a>
                @endauth
            </div>
        @endif
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ route('mybooks.index') }}"><img class="header-icon" src="/index/dist/img/icon/book1.svg" alt=""></a>
                @else
                    <a href="{{ route('login') }}"><img class="header-icon" src="/index/dist/img/icon/book.svg" alt=""></a>
                @endauth
            </div>
        @endif
    </div>
</div>
<div class="lower-menu">
    <a class="lower-menu-a" href="">Подписка</a>
    <a class="lower-menu-a" href="{{ route('book.newbook') }}">Новинки</a>
    <a class="lower-menu-a" href="{{ route('book.newbook') }}">Популярные книги</a>
    <a class="lower-menu-a" href="{{ route('book.classical') }}">Мировая классика</a>
</div>
