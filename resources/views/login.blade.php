@extends('master')
@section('content')

<div style="background-color: grey; height:500 ;" class="card   col-sm-6 m-auto   p-0  text-white">
        <div class="card-header bg-dark text-center">
            <h1>Login</h1>
        </div>
        <div class="card-body ">
            <form method="post" action="login">
                @csrf
                <div class="form-group">
                    <label for="email">User Name</label>
                    <input type="text" class="form-control" name="email" placeholder="email" id="email">
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