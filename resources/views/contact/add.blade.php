@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <h1>add contact page</h1>
        </div>
        <div class="row">
            <form action="/contact/addContact" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">name</label>
                  <input type="text" class="form-control" name="contactName" value="{{old('contactName')}}" placeholder="Enter name">
                  <span class="text-danger">
                    @error('contactName')
                    {{$message}}
                     @enderror
                  </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">adderss</label>
                  <input type="text" class="form-control" name="contactAddress" value="{{old('contactAddress')}}" placeholder="entre address">
                  <span class="text-danger">
                    @error('contactAddress')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <input type="text" class="form-control" name="contactPhone" value="{{old('contactPhone')}}" placeholder="entre phone">
                    <span class="text-danger">
                      @error('contactPhone')
                      {{$message}}
                      @enderror
                    </span>
                  </div>
                <button type="submit" class="btn btn-primary">add</button>
              </form>
        </div>
    </div>   
@endsection