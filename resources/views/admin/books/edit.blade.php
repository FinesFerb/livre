@extends('layouts.admin_layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактировать книгу</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('books.update', ['book'=>$book]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <p>Название: <br><input type="text" name="title" value="{{ $book->title }}" class="form-control"></p>
                            <p>Картинка: <br><input type="file" name="cover" value="{{ $book->cover }}" class="form-control"></p>
                            <p>Автор: <br><input type="text" name="writer" value="{{ $book->writer }}" class="form-control"></p>
                            <p>Категория: <br><select class="form-select form-control" name="category" aria-label="Default select example" required="required">
                                    <option selected value="Классика">Классика</option>
                                    <option value="Путешествие">Путешествие</option>
                                    <option value="Новинка">Новинка</option>
                                    <option value="Детектив">Детектив</option>
                                </select></p>
                            <p>Кол-во страниц: <br><input type="text" name="country_str" value="{{ $book->country_str }}" class="form-control"></p>
                            <p>Время чтения: <br><input type="text" name="time" value="{{ $book->time }}" class="form-control"></p>
                            <p>Год издания: <br><input type="text" name="year" value="{{ $book->year }}" class="form-control"></p>
                            <p>Возрастное ограничение: <br><input type="text" name="age_limit" value="{{ $book->age_limit }}" class="form-control"></p>
                            <p>Описание: <br><textarea rows="10" type="text" name="description" class="form-control">{{ $book->description }}</textarea></p>
                            <p>Дата написания: <br><input type="text" name="data_izdaniy" value="{{ $book->data_izdaniy }}" class="form-control"></p>
                            <p>Объем: <br><input type="text" name="volume" value="{{ $book->volume }}" class="form-control"></p>
                            <p>ISBN(EAN): <br><input type="text" name="ISBN" value="{{ $book->ISBN }}" class="form-control"></p>
                            <p>Переводчик: <br><input type="text" name="translate" value="{{ $book->translate }}" class="form-control"></p>
                            <p>Книга в pdf: <br><input type="file" name="pdf" value="{{ $book->pdf }}" class="form-control"></p>
                            <br><hr>
                            <button type="submit" class="btn btn-success">Редактировать файл</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
