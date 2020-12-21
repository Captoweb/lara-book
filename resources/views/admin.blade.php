@extends('layout')

@section('content')
    <section class="admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2  align="center">Админ панель</h2>
                    <a href="/create" class="btn btn-success create">Добавить книгу</a>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Фото</th>
                            <th>Название</th>

                            <th>Краткий текст</th>
                            <th>Автор</th>
                            <th>Год издания</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        @foreach($imagesInView as $image)
                        <tbody>
                        <tr>
                            <td>{{$image->id}}</td>
                            <td class="mini_img"><img src="/{{$image->image}}" alt="picture" style="height: 150px;"></td>

                            <td>{{$image->name}}</td>

                            <td>{{$image->introduction}}</td>
                            <td>{{$image->author}}</td>
                            <td>{{$image->publication_date}}</td>
                            <td>
                                <a href="/one_book/{{$image->id}}" class="btn btn-info">show</a>

                                <a href="/edit/{{$image->id}}" class="btn btn-warning">edit</a>

                                <a href="/delete/{{$image->id}}" class="btn btn-danger" onclick="return confirm('Вы уверены?');">del</a>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
