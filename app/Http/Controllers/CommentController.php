<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index($eventId)
    {
        $comments = Comment::where('event_id', $eventId)->get();
        return view('dashboard.comments.index', compact('comments', 'eventId'));
    }

    public function store(Request $request, $eventId)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->content = $validatedData['content'];
        $comment->user_id = Auth::user()->id;
        $comment->event_id = $eventId;
        $comment->save();

        return redirect()->route('events.show', $eventId)->with('success', 'Comment added successfully.');
    }

    public function destroy($commentId)
    {
        $comment = Comment::findOrFail($commentId);

        if ($comment->user_id == Auth::user()->id) {
            $comment->delete();
            return redirect()->back()->with('success', 'Comment deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'You do not have permission to delete this comment.');
        }
    }
}
