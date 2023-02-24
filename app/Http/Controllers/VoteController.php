<?php

namespace App\Http\Controllers;

use App\Models\Votes;
use App\Models\Vtuber;
use Illuminate\Http\Request;

class VoteController extends Controller
{
   /* public function upVote(Vtuber $vtuber)
    {
        $isVoted = Votes::where('user_id', auth()->id())->first();

        if (!is_null($isVoted)) {
            if ($isVoted->vote === -1) {
                $isVoted->update(['vote' => 1]);
                //$post->increment('votes', 2);
                return redirect()->back();
            } elseif ($isVoted->vote === 1) {
                return redirect()->back();
            }
        } else {
            Votes::create([
                'vtuber_id' => $vtuber->id,
                'user_id' => auth()->id(),
                'vote' => 1
            ]);
            //$post->increment('votes', 1);
            return redirect()->back();
        }
    }

    public function downVote(Vtuber $vtuber)
    {
        $isVoted = PostVote::where('user_id', auth()->id())->first();

        if (!is_null($isVoted)) {
            if ($isVoted->vote === 1) {
                $isVoted->update(['vote' => -1]);
                //$vtuber->decrement('votes', 2);
                return redirect()->back();
            } elseif ($isVoted->vote === -1) {
                return redirect()->back();
            }
        } else {
            PostVote::create([
                'vtuber_id' => $vtuber->id,
                'user_id' => auth()->id(),
                'vote' => -1
            ]);
            //$post->decrement('votes', 1);
            return redirect()->back();
        }
    }
    //*/
}
