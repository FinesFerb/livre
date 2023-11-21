@extends('index')
@section('content')
@forelse($books as $book)
    <div class="card" style="border: none;">
        <div class="category">
            <div class="label-category">
                <h1 style="font-size: revert;">{{$book->category}}</h1>
            </div>
        </div>
        <div class="main-card">
            <div class="img-card">
                <a class="adaptive-img" href="{{ Route('book.show', ['book'=>$book]) }}">
                    <img class="img-book" src="/storage/books_cover/{{ $book->cover }}" alt="">
                </a>
            </div>
            <div class="description-card">
                <div class="title-card">
                    <a href="{{ Route('book.show', ['book'=>$book]) }}" style="text-decoration: none;"><p class="name-book">{{$book->title}}</p></a>
                    <a class="aftor" href="{{ Route('book.show', ['book'=>$book]) }}" style="text-decoration: none;">{{$book->writer}}</a>
                </div>
                <div class="info-card">
                    <div class="read-card-icon">
                        <img src="/index/dist/img/icon/listen.svg" alt="">
                    </div>
                    <div class="estimation-card">
                        <img class="star-book" src="/index/dist/img/icon/star.svg" alt="">
                        <div class="estimation-book"></div>
                        <div class="number-reading"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
    <tr>
        <td colspan="2">Нет загруженных книг</td>
    </tr>
@endforelse
@endsection
