<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Validators;
use Log;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::latest()->get();
        return view('todo.index')->with('todos',$todos);
    }

    public function add(){
        return view('todo.add');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);
        try{
        Todo::create($request->only(['title','description']));
        return redirect('/todo')->with('ms','Successfully submitted !');
        } catch(\Exception $ex){
            Log::info($ex->getMessage());
            return redirect('/todo')->withInput()->with('md',$ex->getMessage());
        }
    }

    public function edit(Todo $todo){
        try{
            return view('todo.edit')->with('todo',$todo);
        } catch(\Exception $ex){
            if($ex instanceof \Illuminate\Database\Eloquent\ModelNotFoundException){
                return redirect('/todo')->with('md','todo not found !');
            } else {
            Log::info($ex->getMessage());
            // return redirect('/todo/edit')->withInput()->with('md',$ex->getMessage());
            }
        }
    }
}
