<?php

namespace App\Http\Controllers\Dashboard\ClassPm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berbinarp_enrollments;
use App\Models\Berbinarp_user;
use App\Models\Berbinarp_class;

class BerbinarClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berbinarpClasses = Berbinarp_class::withCount('enrollments')->get();
        return view('dashboard.class-pm.berbinar-plus.class.index', compact('berbinarpClasses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.class-pm.berbinar-plus.class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Berbinarp_class::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => 0,
            'thumbnail' => 'default.png',
        ]);

        return redirect()->route('dashboard.berbinar-class.index')->with('success', 'Kelas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class = Berbinarp_class::with(['enrollments'])->findOrFail($id);
        return view('dashboard.class-pm.berbinar-plus.class.show', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = Berbinarp_class::findOrFail($id);
        return view('dashboard.class-pm.berbinar-plus.class.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $class = Berbinarp_class::findOrFail($id);
        $class->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => 0,
            'thumbnail' => 'default.png',
        ]);

        return redirect()->route('dashboard.berbinar-class.index')->with('success', 'Class berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = Berbinarp_class::findOrFail($id);
        $class->delete();
        return redirect()->route('dashboard.berbinar-class.index')->with('success', 'Kelas berhasil dihapus');
    }
}
