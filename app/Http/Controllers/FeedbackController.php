<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\UserPsikotest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function show($test_id, $user_id)
    {
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            return redirect()->route('test.index');
        }

        $user = UserPsikotest::findOrFail($user_id);

        return view('feedback.show', compact('test_id', 'user_id', 'user'));
    }

    public function store(Request $request, $test_id, $user_id)
    {
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            return redirect()->route('test.index');
        }

        $request->validate([
            'experience' => 'required|string',
            'opinion' => 'required|string',
            'suggestion' => 'required|string',
            'social_share' => 'required|string',
        ]);

        Feedback::create([
            'user_id' => $user_id,
            'experience' => $request->input('experience'),
            'opinion' => $request->input('opinion'),
            'suggestion' => $request->input('suggestion'),
            'social_share' => $request->input('social_share'),
        ]);

        // Hapus session
        session()->forget('test_id');
        session()->forget('user_id');

        return redirect()->route('test.index');
    }
}
