@extends('livre.mybooks')
@section('content')
    @forelse($books as $book)
        <div class="card" style="border: none;">
            <div class="category">
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="border: none; background: none;" ><img src="index/dist/img/icon/more.svg" alt="" style="width: 40px; margin-top: -10px; margin-left: 145px; display: block"></button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Action</a></li>
{{--                        <li><a class="dropdown-item" href="">Удалить <i class="fas fa-trash"></i></a></li>--}}
                        <li><form id="delete-form" action="{{ route('mybooks.destroy', $book->id) }}" method="get">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-trash"></i>
                                    Удалить
                                </button>
                            </form></li>
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="label-category" style="display: none">
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
    <script src="https://kit.fontawesome.com/237f9759d1.js" crossorigin="anonymous"></script>
@endsection
