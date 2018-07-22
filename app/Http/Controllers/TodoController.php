<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Validators;

class TodoController extends Controller
{
    public function index(){
        return view('todo.index');
    }

    public function add(){
        return view('todo.add');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);
        Todo::create($request->only(['title','description']));
        return redirect('/todo')->with('ms','Successfully submitted !');
    }
}
