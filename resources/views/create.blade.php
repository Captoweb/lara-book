@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <h1>Добавить книгу</h1>

                <form action="/store" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-control">
                        <input type="file" name="image">
                    </div>

                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" id="name" name="name" class="form-control" value="">
                    </div>


                    <div class="form-group">
                        <label for="d_name">Описание</label>
                        <textarea name="description" id="d_name" class="form-control" rows="3" ></textarea>
                    </div>

                    <div class="form-group">
                        <label for="l_text">Краткий текст</label>
                        <textarea name="introduction" id="l_text" class="form-control" rows="3" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Автор</label>
                        <input type="text" id="author" name="author" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="pd">Дата публикации</label>
                        <input type="number" id="pd" name="publication_date" class="form-control" value="">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
