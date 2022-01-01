@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <h1>contact detail page</h1>
        </div>
        <div class="row">
            <div class="col-sm-4">
                {{$contact->contactName}}
            </div>
            <div class="col-sm-4">
                {{$contact->contactAddress}}
            </div>
            <div class="col-sm-4">
                {{$contact->contactPhone}}
            </div>
        </div>
    </div>   
@endsection