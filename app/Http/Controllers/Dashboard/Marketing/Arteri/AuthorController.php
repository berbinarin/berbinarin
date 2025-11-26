<?php

namespace App\Http\Controllers\Dashboard\Marketing\Arteri;

use App\Http\Controllers\Controller;
use App\Models\Articles\Author;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Inject Service di Constructor
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $authors = Author::withCount('articles')->get();
        return view('dashboard.marketing.arteri.authors.index', compact('authors'));
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
        $request->validate([
            'name_author' => 'required',
            'profil_image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        if (Author::where('name_author', $request->input('name_author'))->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Nama penulis sudah ada. Silakan gunakan nama lain.',
            ]);
        }

        $fotoProfil = null;
        if ($request->hasFile('profil_image')) {
            // ImageService untuk upload, resize, dan convert ke webp
            $fotoProfil = $this->imageService->upload(
                $request->file('profil_image'),
                'artikel/penulis', // folder tujuan
                300,       // (width: 300px)
                300        // (height: 300px, crop square)
            );
        }

        Author::create([
            'name_author' => $request->input('name_author'),
            'profil_image' => $fotoProfil,
        ]);
        return redirect()->route('dashboard.arteri.authors.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Penulis berhasil ditambahkan',
                'icon'    => asset('assets/images/dashboard/success.webp'),
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_author' => 'required',
            'profil_image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        if (Author::where('name_author', $request->input('name_author'))->where('id', '!=', $id)->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Nama penulis sudah ada. Silakan gunakan nama lain.',
            ]);
        }

        $author = Author::findOrFail($id);

        // Perbarui foto profil
        if ($request->hasFile('profil_image')) {
            // Hapus foto lama jika ada
            if ($author->profil_image) {
                $this->imageService->delete('artikel/penulis', $author->profil_image);
            }
            // Upload foto baru
            $author->profil_image = $this->imageService->upload(
                $request->file('profil_image'),
                'artikel/penulis',
                300,
                300
            );
        }

        // Perbarui data penulis
        $author->update([
            'name_author' => $request->input('name_author'),
            'profil_image' => $author->profil_image,
        ]);

         return redirect()->route('dashboard.arteri.authors.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Penulis berhasil diperbarui',
                'icon'    => asset('assets/images/dashboard/success.webp'),
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::findOrFail($id);

        // Periksa apakah penulis sedang digunakan dalam artikel
        if ($author->articles()->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Penulis ini tidak dapat dihapus karena masih digunakan dalam artikel.',
            ]);
        }

        // Hapus gambar penulis jika ada
        if ($author->profil_image) {
            $this->imageService->delete('artikel/penulis', $author->profil_image);
        }

        // Hapus penulis
        $author->delete();
        return redirect()->route('dashboard.arteri.authors.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Penulis berhasil dihapus',
                'icon'    => asset('assets/images/dashboard/success.webp'),
            ]);
    }
}
