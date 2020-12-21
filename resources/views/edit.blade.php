@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <h1>Edit book</h1>
                <img src="/{{$imageInView->image}}" alt="" style="height: 150px;">
                <form action="/update/{{$imageInView->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-control">
                        <input type="file" name="image">
                    </div>

                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$imageInView->name}}">
                    </div>


                    <div class="form-group">
                        <label for="d_name">Описание</label>
                        <textarea name="description" id="d_name" class="form-control" rows="6">{{$imageInView->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="l_text">Краткий текст</label>
                        <textarea name="introduction" id="l_text" class="form-control" rows="3">{{$imageInView->introduction}}</textarea>

                    </div>
                    <div class="form-group">
                        <label for="author">Автор</label>
                        <input type="text" id="author" name="author" class="form-control" value="{{$imageInView->author}}">
                    </div>
                    <div class="form-group">
                        <label for="pd">Дата публикации</label>
                        <input type="text" id="pd" name="publication_date" class="form-control" value="{{$imageInView->publication_date}}
                            ">
                    </div>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
