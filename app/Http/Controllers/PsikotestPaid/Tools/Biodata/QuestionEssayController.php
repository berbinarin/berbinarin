<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\Biodata;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\Biodata\QuestionEssay;
use App\Models\PsikotestPaid\Biodata\QuestionCategory;
use Illuminate\Http\Request;

class QuestionEssayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // //test ambil seluruh question dari category 1
        // $questionCategory = QuestionCategory::find(1);
        // $questionCategory = $questionCategory->question_essays;
        // return response()->json([
        //     'message' => $questionCategory,
        // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Cek apakah data 'questions' yang dikirim berupa array atau satu pertanyaan
            if (is_array($request->question)) {
                // Jika data berbentuk array (lebih dari satu pertanyaan)
                $validatedData = $request->validate([
                    'question_category_id.*' => 'required|integer|exists:question_categories,id',
                    'question.*' => 'required|min:3|max:255',
                ]);

                $i = 0;
                foreach ($request->question as $key) {
                    $validatedData['question_category_id']  = $request->question_category_id[$i];
                    $validatedData['question'] = $request->question[$i];
                    $createdQuestions[] = QuestionEssay::create($validatedData);
                    $i++;
                }
                return response()->json([
                    'message' => 'Multiple questions successfully created',
                    'data' => $createdQuestions,
                ], 201);
            } else {
                // Jika data hanya satu pertanyaan
                $validatedData = $request->validate([
                    'question_category_id' => 'required|integer|exists:question_categories,id',
                    'question' => 'required|min:3|max:255',
                ]);
                $questionEssay = QuestionEssay::create($validatedData);
                return response()->json([
                    'message' => 'Single question successfully created',
                    'data' => $questionEssay,
                ], 201);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create questions',
                'error' => $e->getMessage(), 
            ], 500); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionEssay $questionEssay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionEssay $questionEssay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionEssay $questionEssay)
    {
        try {
            $validatedData = $request->validate([
                'question_category_id' => 'required|integer|exists:question_categories,id',
                'question' => 'required|min:3|max:255',
            ]);
            QuestionEssay::where('id',$questionEssay->id)->update($validatedData);
            return response()->json([
                'message' => 'Question successfully updated',
                'data' => QuestionEssay::find($questionEssay->id),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update questions',
                'error' => $e->getMessage(), 
            ], 500); 
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionEssay $questionEssay)
    {
        try {
            QuestionEssay::destroy($questionEssay->id);
            return response()->json([
                'message' => 'Question successfully deleted',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update questions',
                'error' => $e->getMessage(), 
            ], 500); 
        }
    }
}
