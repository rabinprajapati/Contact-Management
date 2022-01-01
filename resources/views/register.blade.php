@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Register page</h1>
        </div>
        <div class="row">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" name="userName" placeholder="Enter username">
                    <span class="text-danger">
                      @error('userName')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="userEmail" placeholder="Enter email">
                  <span class="text-danger">
                    @error('userAddress')
                      {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="userPassword" placeholder="Password">
                  <span class="text-danger">
                    @error('userPassword')
                      {{$message}}
                    @enderror
                  </span>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>   
@endsection