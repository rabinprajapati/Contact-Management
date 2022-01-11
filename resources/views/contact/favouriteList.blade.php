@extends('layout')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2>Name</h2>
            </div>
            <div class="col-sm-3">
                <h2>address</h2>
            </div>
            <div class="col-sm-2">
                <h2>phone</h2>
            </div>
            <div class="col-sm-4">
                <h2>actions</h2>
            </div>
        </div>
        @foreach ($contacts as $contact)
        <br>
            <div class="row">
                <div class="col-sm-3">
                    {{$contact->contactName}}
                </div>   
                <div class="col-sm-3">
                    {{$contact->contactAddress}}
                </div>
                <div class="col-sm-2">
                    {{$contact->contactPhone}}
                </div> 
                <div class="col-sm-4">
                    <a href="/contact/unfavourite/{{$contact->id}}"><button class="btn btn-success">un fav</button></a>
                    <a href="/contact/edit/{{$contact->id}}"><button class="btn btn-primary">edit</button></a>
                    <a href="/contact/delete/{{$contact->id}}"><button class="btn btn-danger">delete</button></a>
                    <a href="/contact/detail/{{$contact->id}}"><button class="btn btn-warning">detail</button></a>
                </div> 
            </div>      
            <hr>  
        @endforeach
    </div>
@endsection