@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2>Name</h2>
            </div>
            <div class="col-sm-3">
                <h2>address</h2>
            </div>
            <div class="col-sm-3">
                <h2>phone</h2>
            </div>
            <div class="col-sm-3">
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
                <div class="col-sm-3">
                    {{$contact->contactPhone}}
                </div> 
                <div class="col-sm-3">
                    <a href="/edit/{{$contact->id}}"><button class="btn btn-primary">edit</button></a>
                    <a href="/delete/{{$contact->id}}"><button class="btn btn-danger">delete</button></a>
                    <a href="/detail/{{$contact->id}}"><button class="btn btn-success">detail</button></a>
                </div> 
            </div>      
            <hr>  
        @endforeach
    </div>
@endsection