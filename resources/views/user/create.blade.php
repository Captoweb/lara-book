@extends('layout')

@section('content')

    <div class="container">
    <div class="form">
        <h1>Register</h1>

        <form action="{{route('register.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"name="name" value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label for="em">Email</label>
                <input type="email" class="form-control" id="em" aria-describedby="emailHelp"name="email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="ex">Password</label>
                <input type="password" class="form-control" id="ex" name="password">
            </div>

            <div class="form-group">
                <label for="exp">Confirm Password</label>
                <input type="password" class="form-control" id="exp" name="password_confirmation">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection
