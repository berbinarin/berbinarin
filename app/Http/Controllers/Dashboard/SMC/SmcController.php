<?php

namespace App\Http\Controllers\Dashboard\SMC;

use App\Http\Controllers\Controller;
use App\Models\SocialMediaContent;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class SmcController extends Controller
{
    public function index()
    {
        $contents = SocialMediaContent::orderBy('position')->get();

        return view('dashboard.smc.index', compact('contents'));
    }

    public function create()
    {
        $nextPosition = $this->nextActivePosition();

        return view('dashboard.smc.create', compact('nextPosition'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'platform' => 'required|in:instagram,youtube,tiktok,spotify,linkedin,twitter,x',
            'url' => 'required|url|max:255',
            'status' => 'required|in:active,inactive',
        ]);
        $validated['platform'] = $this->normalizePlatform($validated['platform']);

        $validated['position'] = $validated['status'] === 'active'
            ? $this->nextActivePosition()
            : 0;

        SocialMediaContent::create($validated);
        $this->syncActivePositions();

        Alert::toast('Data Konten Berhasil Ditambahkan', 'success')->autoClose(5000);
        return redirect()->route('dashboard.social-media-contents.index');
    }

    public function edit($id)
    {
        $content = SocialMediaContent::findOrFail($id);
        return view('dashboard.smc.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'platform' => 'required|in:instagram,youtube,tiktok,spotify,linkedin,twitter,x',
            'url' => 'required|url|max:255',
            'status' => 'required|in:active,inactive',
        ]);
        $validated['platform'] = $this->normalizePlatform($validated['platform']);

        $content = SocialMediaContent::findOrFail($id);

        $content->fill($validated);
        $content->position = $validated['status'] === 'active'
            ? ($content->position > 0 ? $content->position : $this->nextActivePosition($content->id))
            : 0;
        $content->save();
        $this->syncActivePositions();

        return redirect()->route('dashboard.social-media-contents.index')->with('success', 'Data Konten Berhasil Diubah');
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:active,inactive',
        ]);

        $content = SocialMediaContent::findOrFail($id);
        $newStatus = $validated['status'];

        $content->update([
            'status' => $newStatus,
            'position' => $newStatus === 'active' ? $this->nextActivePosition($content->id) : 0,
        ]);
        $this->syncActivePositions();

        return redirect()
            ->route('dashboard.social-media-contents.index')
            ->with([
                'alert' => true,
                'icon' => asset('assets/images/dashboard/success.webp'),
                'title' => 'Berhasil',
                'message' => 'Status berhasil diubah.',
                'type' => 'info',
            ]);
    }

    public function destroy($id)
    {
        $content = SocialMediaContent::findOrFail($id);
        $content->delete();
        $this->syncActivePositions();

        return redirect()->route('dashboard.social-media-contents.index')->with([
            'alert' => true,
            'icon' => asset('assets/images/dashboard/success.webp'),
            'title' => 'Berhasil!',
            'message' => 'Data Konten Berhasil Dihapus.',
            'type' => 'success',
        ]);
    }

    private function nextActivePosition(?int $exceptId = null): int
    {
        $query = SocialMediaContent::where('status', 'active');

        if ($exceptId !== null) {
            $query->where('id', '!=', $exceptId);
        }

        return $query->count() + 1;
    }

    private function syncActivePositions(): void
    {
        $activeContents = SocialMediaContent::where('status', 'active')
            ->orderBy('position')
            ->orderBy('id')
            ->get();

        $position = 1;
        foreach ($activeContents as $activeContent) {
            if ($activeContent->position !== $position) {
                $activeContent->update(['position' => $position]);
            }
            $position++;
        }
    }

    private function normalizePlatform(string $platform): string
    {
        return $platform === 'twitter' ? 'x' : $platform;
    }
}
