<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Test;
use App\Models\UserPsikotest;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function show($test_id, $user_id)
    {
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            return redirect()->route('test.index');
        }

        $test = Test::findOrFail($test_id);
        $user = UserPsikotest::findOrFail($user_id);

        $result = Result::where('test_id', $test_id)->firstOrFail();

        return view('result.show', compact('test', 'user', 'result'));
    }

    public function redirectToFeedback($test_id, $user_id)
    {
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            return redirect()->route('test.index');
        }

        return redirect()->route('feedback.show', ['test_id' => $test_id, 'user_id' => $user_id]);
    }
}
