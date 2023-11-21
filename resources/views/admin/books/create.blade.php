@extends('layouts.admin_layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Добавить новую книгу</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
                            @csrf
                            <p>Название: <br><input type="text" name="title" value="{{ old('title') }}" class="form-control" required="required"></p>
                            <p>Картинка: <br><input type="file" name="cover" value="{{ old('cover') }}" class="form-control" required="required"></p>
                            <p>Автор: <br><input type="text" name="writer" value="{{ old('writer') }}" class="form-control" required="required"></p>
                            <p>Категория: <br><select class="form-select form-control" name="category" aria-label="Default select example" required="required">
                                    <option selected value="Классика">Классика</option>
                                    <option value="Путешествие">Путешествие</option>
                                    <option value="Новинка">Новинка</option>
                                    <option value="Детектив">Детектив</option>
                                </select></p>
                            <p>Кол-во страниц: <br><input type="text" name="country_str" value="{{ old('country_str') }}" class="form-control" required="required"></p>
                            <p>Время чтения: <br><input type="text" name="time" value="{{ old('time') }}" class="form-control" required="required"></p>
                            <p>Год издания: <br><input type="text" name="year" value="{{ old('year') }}" class="form-control" required="required"></p>
                            <p>Возрастное ограничение: <br><input type="text" name="age_limit" value="{{ old('age_limit') }}" class="form-control" required="required"></p>
                            <p>Описание: <br><textarea rows="10" type="text" name="description" value="{{ old('description') }}" class="form-control" required="required"></textarea></p>
                            <p>Дата написания: <br><input type="text" name="data_izdaniy" value="{{ old('data_izdaniy') }}" class="form-control" required="required"></p>
                            <p>Объем: <br><input type="text" name="volume" value="{{ old('volume') }}" class="form-control" required="required"></p>
                            <p>ISBN(EAN): <br><input type="text" name="ISBN" value="{{ old('ISBN') }}" class="form-control" required="required"></p>
                            <p>Переводчик: <br><input type="text" name="translate" value="{{ old('translate') }}" class="form-control" required="required"></p>
                            <p>Книга в pdf: <br><input type="file" name="pdf" value="{{ old('pdf') }}" class="form-control" required="required"></p>
                            <br><hr>
                            <button type="submit" class="btn btn-success">Добавить файл</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
