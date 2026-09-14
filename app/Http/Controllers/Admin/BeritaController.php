<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'image' => ['nullable', 'url', 'max:2048'],
            'foto' => ['nullable', 'image', 'max:5120'], // maks 5MB
        ]);

        // Upload file menang duluan kalau dua-duanya diisi.
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('berita', 'public');
            $image = Storage::url($path);
        } else {
            $image = $data['image'] ?? null;
        }

        Berita::create([
            'title' => $data['title'],
            'body' => $data['body'],
            'image' => $image,
            'tanggal' => now()->toDateString(),
        ]);

        return redirect(route('beranda').'#berita')->with('success', 'Berita berhasil dipublikasikan.');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->image && str_starts_with($berita->image, '/storage/')) {
            $path = str_replace('/storage/', '', $berita->image);
            Storage::disk('public')->delete($path);
        }

        $berita->delete();
        return redirect(route('beranda').'#berita')->with('success', 'Berita dihapus.');
    }
}
