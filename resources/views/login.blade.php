@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Login page</h1>
        </div>
        <div class="row">
            <form action="login" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="userEmail" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="userPassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>   
@endsection