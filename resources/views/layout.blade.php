<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>lara-books</title>
</head>
<body>
<div class="main_background">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-md-auto">
            @if (auth()->check())
                    <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                    <a class="nav-link" href="{{route('admin')}}">Admin panel</a>
                    <a class="nav-link" href="{{route('logout')}}">Log out</a>
             @else
                    <a class="nav-link" href="{{route('login.create')}}">Login</a>
                    <a class="nav-link" href="{{route('register.create')}}">Register</a>
             @endif
            </ul>
        </div>
    </nav>
    <br>

</div>

@yield('content')



    </body>
</html>
