<?php

namespace App\Http\Controllers;

use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all()->sortBy("created_at");
        return view("todos/index")->with("todos", $todos);
    }

    public function show(Todo $todo)
    {
        return view("todos/show", compact("todo"));
    }

    public function create()
    {
        return view("todos/create");
    }

    public function store()
    {
        $this->validate(request(), [
            "name"=>"required|string|max:100",
            "description"=>"required|nullable|string"
        ]);
        $todo = new Todo();
        $todo->name = request()->name;
        $todo->description = request()->description;
        $todo->save();

        session()->flash("success", "Todo successfully created!");

        return redirect("/todos");
    }

    public function edit(Todo $todo)
    {
        return view("todos/edit", compact("todo"));
    }

    public function update(Todo $todo)
    {
        $this->validate(request(), [
            "name"=>"required|string|max:100",
            "description"=>"required|nullable|string"
        ]);
        $todo->name = request()->name;
        $todo->description = request()->description;
        $todo->completed = request()->completed == "on" ? true : false;

        $todo->update();

        session()->flash("success", "Todo successfully updated!");

        return redirect("/todos/$todo->id");
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        session()->flash("success", "Todo successfully deleted!");

        return redirect("/todos");
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;

        $todo->update();

        session()->flash("success", "Todo successfully completed!");

        return redirect("/todos");
    }
}
