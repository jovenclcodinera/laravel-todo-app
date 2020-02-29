@extends('layouts.app')

@section('content')
    <div class="offset-2 col-8 offset-2 my-5">
        <div class="card card-default">
            <div class="card-header text-center bg-primary text-white"><h1>New Todo Item</h1></div>
            <div class="card-body">
                <form action="/todos" method="post">
                    @csrf
                    <div class="my-5 mx-3">
                        <div class="row form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Todo Name">
                            @error("name")
                                <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="row form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="5" placeholder="Todo Description"></textarea>
                            @error("description")
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-success btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop
