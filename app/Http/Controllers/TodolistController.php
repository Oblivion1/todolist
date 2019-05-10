<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Todolist;

class TodolistController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function all()
    {
        $user = Auth::user();
        
        $todolists = Todolist::all();

        return view('todolists.overview', compact('todolists'));
    }

    public function overview()
    {
        $user = Auth::user();

        $todolists = $user->todolists;

        return view('todolists.overview', compact('todolists'));
    }

    public function todolist(Request $request)
    {
        $uuid = $request->u;
        
        $todolist = Todolist::where('uuid', $uuid)->first();
        
        $user = Auth::user();


        return view('todolists.todolist', compact('todolist'));
    }

    public function edit(Request $request)
    {
        $uuid = $request->u;
        
        $todolist = Todolist::where('uuid', $uuid)->first();
        
        $user = Auth::user();

        return view('todolists.edit', compact('todolist'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
    
        if ($validator->fails()) {
            return redirect(Route('newtodolist'))
                ->withInput()
                ->withErrors($validator);
        }    

        $user = Auth::user();

        $todolist = new Todolist;
        $todolist->name = $request->name;

        $user->todolists()->save($todolist);

        return redirect(route('todolist') . '?u=' . $todolist->uuid);
    }

    public function save(Request $request)
    {
        $uuid = $request->u;

        $todolist = Todolist::where('uuid', $uuid)->first();

        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect(route('edittodolist') . '?u=' . $todolist->uuid)
            ->withInput()
            ->withErrors($validator);
        }    
        
        $todolist->name = $request->name;
        
        $todolist->save();

        return redirect(route('todolist') . '?u=' . $todolist->uuid);
    }

    public function delete(Request $request)
    {
        $uuid = $request->u;

        $todolist = Todolist::where('uuid', $uuid)->first();

        $user = Auth::user();

        $todolist->delete();

        return redirect(route('root'));
    }
}