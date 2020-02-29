@extends('layouts.app')

@section('content')
    <div class="offset-2 col-8 offset-2 my-5">
        <div class="card card-default">
            <div class="card-header text-center bg-warning text-white"><h1>Edit Todo Item</h1></div>
            <div class="card-body">
                <form action="/todos/{{$todo->id}}" method="post">
                    @csrf
                    @method("put")
                    <div class="my-5 mx-3">
                        <div class="row form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$todo->name}}">
                            @error("name")
                                <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="row form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="5">{{$todo->description}}</textarea>
                            @error("description")
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="row form-group align-items-center">
                            <label for="completed">Completed?</label>&nbsp;
                            <input type="checkbox" data-toggle="toggle" data-onstyle="primary" name="completed" id="completed" class="mb-2"
                                   @if ($todo->completed) checked @endif>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="/todos/{{$todo->id}}" class="btn btn-info ml-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
