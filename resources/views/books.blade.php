@extends('layout')

@section('content')
<div class="container">
    <!--<form method="get" action="">
        <div class="form-row">
            <div class="form-group col-md-10">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search">
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </div>
    </form>-->


    <h1 align="center">Каталог книг</h1>


    <div class="col-md-12">

        <div class="row">


            @foreach($imagesInView as $image)

            <div class="col-md-4">
                <div class="card" style="width: 19rem; margin: 10px 0;">
                    <div class="product-info__image">
                        <img src="/{{$image->image}}" class="card-img-top" alt="...">
                    </div>

                    <!-- <img src="../img/base_picture.jpg" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-text">{{$image->name}}</h5>

                        <p>{{$image->author}}</p>
                        <p>О книге</p>
                        <p>{{$image->introduction}}</p>
                        <a href="/one_book/{{$image->id}}" class="card-link">Подробнее</a>

                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div> <!-- /.row-->

</div><!-- /container-->
@endsection
