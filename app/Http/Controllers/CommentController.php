<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comments();
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()
            ->back()
            ->with('success', 'Comment added successfully!');
    }
}
