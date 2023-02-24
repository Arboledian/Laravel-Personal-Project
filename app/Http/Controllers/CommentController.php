<?php

namespace App\Http\Controllers;

use App\Models\Vtuber;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comments();
        $comment->user_id = $request->input('user_id');
        $comment->user_id = $request->input('vtuber_id');
        $comment->content = $request->input('content');
        $comment->save();
/*
        $formFields = $request->validate([
            'content' => 'required',
        ]);
        $formFields['user_id'] = auth()->id();
        $formFields['vtuber_id'] = Vtuber->id();
        Comments::create($formFields);
        */
        return redirect()
            ->back()
            ->with('success', 'Comment added successfully!');
    }
}
