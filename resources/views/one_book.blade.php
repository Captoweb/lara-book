@extends('layout')

@section('content')
    <div class="container background">
        <div class="col-md-12 one_book" >
            <div class="row">
                <div class="col-md-4">

                    <img src="/{{$imageInView->image}}" class="one_img" alt="...">

                </div>

                <div class="col-md-8">

                    <h3>{{$imageInView->name}}</h3>

                    <p>{{$imageInView->description}}</p>
                    <p></p>
                    <p>Автор</p>
                    <p>{{$imageInView->author}}</p>
                    <p>Год публикации</p>
                    <p>{{$imageInView->publication_date}}</p>

                </div>
            </div>

        </div>

    </div>
@endsection
