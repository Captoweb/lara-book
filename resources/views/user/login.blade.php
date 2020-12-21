@extends('layout')

@section('content')
<div class="container">

    <div class="form">
        <h1>Login</h1>

        <form action="{{route('login')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="em">Email</label>
                <input type="email" class="form-control" id="em" aria-describedby="emailHelp"name="email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="ex">Password</label>
                <input type="password" class="form-control" id="ex" name="password">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
