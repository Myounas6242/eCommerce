@extends('master')
@section('content')

<div style="background-color: grey; height:500 ;" class="card   col-sm-6 m-auto   p-0  text-white">
        <div class="card-header bg-dark text-center">
            <h1>Login</h1>
        </div>
        <div class="card-body ">

            @if($errors)
            @foreach($errors->all() as $error)
            <h4 class="text-danger">{{$error}}</h4>
            @endforeach
            @endif

            @if(Session::has('error'))
            <h4 class="text-danger">{{session('error')}}</h4>
            @endif
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="email">User Name</label>
                    <input type="text" class="form-control" name="username" placeholder="username" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="password" id="pwd">
                </div>

        </div>
        <div class="card-footer bg-dark text-muted text-center">
            <button type="submit" class="btn text-white btn-info ">Login</button>
        </div>
        </form>
    </div>
 
@endsection 