<?php

namespace App\Http\Controllers\Landing\Arteri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'article_id' => 'required|exists:artikel,id',
            'name' => 'required',
            'comment' => 'required',
        ]);

        // Simpan komentar
        $comment = Comment::create([
            'article_id' => $validated['article_id'],
            'name' => $validated['name'],
            'comment' => $validated['comment'],
        ]);

        return response()->json([
            'success' => true,
            'comment' => [
                'name' => $comment->name,
                'comment' => $comment->comment,
                'created_at' => $comment->created_at->diffForHumans(),
            ]
        ]);
    }
}
