@extends('layouts.admin_layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список книг</div>
                    <div class="card-body">
                        <a href="{{ route('books.create') }}" class="btn btn-primary">Добавить</a><br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>UUID</th>
                                        <th>Название</th>
                                        <th>Картинка</th>
                                        <th>Автор</th>
                                        <th>Категория</th>
                                        <th>Кол-во страниц</th>
                                        <th>Время чтения</th>
                                        <th>Год издания</th>
                                        <th>Возрастное ограничение</th>
                                        <th>Описание</th>
                                        <th>Дата написания</th>
                                        <th>Объем</th>
                                        <th>ISBN(EAN)</th>
                                        <th>Переводчик</th>
                                        <th>Книга в pdf</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($books as $book)
                                    <tr>
                                        <td>{{$book->uuid}}</td>
                                        <td>{{$book->title}}</td>
                                        <td><a href="{{ route('books.download', $book->uuid) }}">{{ $book->cover }}</a></td>
                                        <td>{{$book->writer}}</td>
                                        <td>{{$book->category}}</td>
                                        <td>{{$book->country_str}}</td>
                                        <td>{{$book->time}}</td>
                                        <td>{{$book->year}}</td>
                                        <td>{{$book->age_limit}}</td>
                                        <td class="text-truncate" style="max-width: 150px;">{{$book->description}}</td>
                                        <td>{{$book->data_izdaniy}}</td>
                                        <td>{{$book->volume}}</td>
                                        <td>{{$book->ISBN}}</td>
                                        <td>{{$book->translate}}</td>
                                        <td>{{$book->pdf}}</td>
                                        <td class="inline-block"><a class="btn btn-info btn-sm" style="display: block; width: 130px" href="{{ route('books.edit', ['book'=>$book]) }}">
                                                <i class="fas fa-pencil-alt"></i>
                                                Редактировать
                                            </a>
                                            <br>
                                            <form id="delete-form" action="{{ route('books.destroy', ['book'=>$book]) }}" method="POST" style="display: grid">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                    <i class="fas fa-trash"></i>
                                                    Удалить
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">Нет загруженных книг</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/237f9759d1.js" crossorigin="anonymous"></script>
@stop
