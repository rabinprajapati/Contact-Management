@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <h1>edit contact page</h1>
        </div>
        <div class="row">
            <form action="/contact/updateContact/{{$contact->id}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">name</label>
                  <input type="text" class="form-control" name="contactName" value={{$contact->contactName}}>
                  <span class="text-danger">
                    @error('contactName')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">adderss</label>
                  <input type="text" class="form-control" name="contactAddress" value={{$contact->contactAddress}}>
                  <span class="text-danger">
                    @error('contactAddress')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <input type="text" class="form-control" name="contactPhone" value={{$contact->contactPhone}}>
                    <span class="text-danger">
                      @error('contactPhone')
                          {{$message}}
                      @enderror
                    </span>
                  </div>
                <button type="submit" class="btn btn-primary">edit</button>
              </form>
        </div>
    </div>   
@endsection