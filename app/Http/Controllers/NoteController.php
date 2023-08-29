<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Create a new note in the database.
     */
    public function create(Request $request)
    {
        // Validate the request...
        if ($request->has('noteId')) {
            Note::where('id', (int)$request->noteId)->update(['title'=>$request->title,
                                                              'content'=>$request->content]);
        }
        else {
            $note = new Note;
        
            $note->user_id = Auth::id();
            $note->title = $request->title;
            $note->content = $request->content;

            $note->save();
        }
        
        return view('notes', ['msg' => Note::where('user_id', Auth::id())->get()]);
    }
}
