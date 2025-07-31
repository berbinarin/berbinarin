<?php
namespace App\Http\Controllers\Dashboard\ClassPM;

use App\Http\Controllers\Controller;
use App\Models\Berbinarp_class;
use App\Models\Berbinarp_user;
use Illuminate\Http\Request;

class BerbinarPlusDashboardController extends Controller
{
    public function index()
    {
        $classes = Berbinarp_class::all();
        return view('dashboard.class-pm.berbinar-plus.index', compact('classes'));
    }

    public function show($id)
    {
        $class = Berbinarp_class::findOrFail($id);
        return view('dashboard.class-pm.berbinar-plus.class.detail', compact('class'));
    }

    public function create()
    {
        return view('dashboard.class-pm.berbinar-plus.class.create');
        return redirect()->back()->with('success', 'Kelas berhasil diupdate');
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

    public function edit($id)
    {
        $class = Berbinarp_class::findOrFail($id);
        return view('dashboard.class-pm.berbinar-plus.class.edit', compact('class'));
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


        public function showUser($id)
    {
        $user = Berbinarp_user::findOrFail($id);
        return view('dashboard.class-pm.berbinar-plus.user.detail', compact('user'));
    }

    public function createUser()
    {
        return view('dashboard.class-pm.berbinar-plus.user.create');
        return redirect()->back()->with('success', 'User berhasil diupdate');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required',
            'wa_number' => 'required',
            'gender' => 'required',
            'last_education' => 'required',
            'age' => 'required',
            'knowing_source' => 'required'
        ]);

        $data = $request->only(['first_name', 'email', 'wa_number', 'gender', 'last_education', 'age', 'knowing_source']);
        Berbinarp_user::create($data);

        return redirect()->back()->with('success', 'User berhasil ditambahkan');
    }

    public function editUser($id)
    {
        $user = Berbinarp_user::findOrFail($id);
        return view('dashboard.class-pm.berbinar-plus.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = Berbinarp_user::findOrFail($id);
        $request->validate([
            'first_name' => 'required',
            'email' => 'required',
            'wa_number' => 'required',
            'gender' => 'required',
            'last_education' => 'required',
            'age' => 'required',
            'knowing_source' => 'required'
        ]);

        $data = $request->only(['first_name', 'email', 'wa_number', 'gender', 'last_education', 'age', 'knowing_source']);
        $user->update($data);

        return redirect()->back()->with('success', 'User berhasil diupdate');
    }

    public function destroyUser($id)
    {
        $class = Berbinarp_class::findOrFail($id);
        $class->delete();
        return redirect()->back()->with('success', 'User berhasil dihapus');
    }
}
