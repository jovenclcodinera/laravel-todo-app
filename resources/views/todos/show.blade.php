@extends('layouts.app')

@section('title')
    Todo: {{$todo->name}}
@stop

@section('content')
    <div class="offset-3 col-6 offset-3">
        <h1 class="text-center my-5">{{$todo->name}}</h1>
        <div class="row justify-content-center">
            <div class="card" style="min-width: 50px">
                <div class="card-header bg-primary text-white py-2">
                    <span class="mr-5 mr-5">Details:</span>
                    <a class="btn btn-danger float-right btn-sm ml-2" href="/todos/{{$todo->id}}/delete">Delete</a>
                    <a class="btn btn-warning float-right btn-sm" href="/todos/{{$todo->id}}/edit">Edit</a>
                </div>
                <div class="card-body bg-gray-light text-center">
                    {{$todo->description}}
                    @if ($todo->completed)
                        <p style="color: green">Completed</p>
                    @else
                        <p style="color: red">Not Completed</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="text-center"><a href="/todos" class="btn btn-info mt-4">Return</a></div>
    </div>
@stop
