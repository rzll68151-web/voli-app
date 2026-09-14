<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'image' => ['nullable', 'url', 'max:2048'],
            'foto' => ['nullable', 'image', 'max:5120'], // maks 5MB
        ]);

        // Upload file menang duluan kalau dua-duanya diisi.
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('prestasi', 'public');
            $image = Storage::url($path);
        } else {
            $image = $data['image'] ?? null;
        }

        Prestasi::create([
            'title' => $data['title'],
            'deskripsi' => $data['deskripsi'] ?? null,
            'image' => $image,
        ]);

        return redirect(route('beranda').'#prestasi')->with('success', 'Prestasi berhasil disimpan.');
    }

    public function destroy(Prestasi $prestasi)
    {
        if ($prestasi->image && str_starts_with($prestasi->image, '/storage/')) {
            $path = str_replace('/storage/', '', $prestasi->image);
            Storage::disk('public')->delete($path);
        }

        $prestasi->delete();
        return redirect(route('beranda').'#prestasi')->with('success', 'Prestasi dihapus.');
    }
}
