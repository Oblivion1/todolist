<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Todolist;
use App\Note;

class NoteController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function note(Request $request)
    {
        $uuid = $request->u;

        $note = Note::where('uuid', $uuid)->first();

        $user = Auth::user();
        

        return view('notes.note', compact('note'));
    }

    public function new(Request $request)
    {
        $uuid = $request->u;

        $todolist = Todolist::where('uuid', $uuid)->first();

        $user = Auth::user();
        

        return view('notes.create', compact('todolist'));
    }

    public function edit(Request $request)
    {
        $uuid = $request->u;

        $note = Note::where('uuid', $uuid)->first();
        
        $user = Auth::user();
        

        return view('notes.edit', compact('note'));
    }

    public function create(Request $request)
    {
        $uuid = $request->u;
        
        $todolist = Todolist::where('uuid', $uuid)->first();
                
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('newnote') . '?u=' . $todolist->uuid)
            ->withInput()
            ->withErrors($validator);
        }    
        
        
        $note = new Note;
        $note->title = $request->title;
        $note->content = $request->content;
        $note->duration = $request->duration;

        $todolist->notes()->save($note);

        return redirect(route('todolist') . '?u=' . $todolist->uuid);
    }

    public function save(Request $request)
    {
        $uuid = $request->u;

        $note = Note::where('uuid', $uuid)->first();

        $user = Auth::user();
        

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('editnote') . '?u=' . $note->uuid)
            ->withInput()
            ->withErrors($validator);
        }    
        
        $note->title = $request->title;
        $note->content = $request->content;
        $note->duration = $request->duration;

        $note->save();

        return redirect(route('note') . '?u=' . $note->uuid);
    }

    public function complete(Request $request)
    {
        $uuid = $request->u;

        $note = Note::where('uuid', $uuid)->first();

        $user = Auth::user();
        
        $note->complete = !$note->complete;
        $note->save();

        return redirect(route('todolist') . '?u=' . $note->todolist->uuid);
    }

    public function delete(Request $request)
    {
        $uuid = $request->u;

        $note = Note::where('uuid', $uuid)->first();

        $user = Auth::user();
        

        $todolist = $note->todolist;
        $note->delete();

        return redirect(route('todolist') . '?u=' . $todolist->uuid);
    }
}