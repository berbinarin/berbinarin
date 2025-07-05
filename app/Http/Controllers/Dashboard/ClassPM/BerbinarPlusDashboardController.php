<?php
namespace App\Http\Controllers\Dashboard\ClassPM;

use App\Http\Controllers\Controller;
use App\Models\Berbinarp_class;
use Illuminate\Http\Request;

class BerbinarPlusDashboardController extends Controller
{
    public function index()
    {
        $classes = Berbinarp_class::all();
        return view('dashboard.class-pm.berbinar-plus-class.index', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|integer',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['title', 'description', 'price']);
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('class_thumbnails', 'public');
        }
        Berbinarp_class::create($data);

        return redirect()->back()->with('success', 'Kelas berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $class = Berbinarp_class::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|integer',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['title', 'description', 'price']);
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('class_thumbnails', 'public');
        }
        $class->update($data);

        return redirect()->back()->with('success', 'Kelas berhasil diupdate');
    }

    public function destroy($id)
    {
        $class = Berbinarp_class::findOrFail($id);
        $class->delete();
        return redirect()->back()->with('success', 'Kelas berhasil dihapus');
    }
}