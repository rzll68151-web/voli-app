<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => ['nullable', 'url', 'max:2048'],
            'caption' => ['nullable', 'string', 'max:255'],
            'foto' => ['nullable', 'image', 'max:5120'], // maks 5MB
            'video' => ['nullable', 'mimes:mp4,mov,avi,webm,mkv', 'max:51200'], // maks 50MB
        ]);

        $type = 'foto';

        // Prioritas: upload video > upload foto > URL manual.
        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('galeri', 'public');
            $url = Storage::url($path);
            $type = 'video';
        } elseif ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('galeri', 'public');
            $url = Storage::url($path);
        } else {
            $url = $data['url'] ?? null;
            // Kalau isinya URL manual, tebak jenisnya dari ekstensi file.
            if ($url && preg_match('/\.(mp4|mov|avi|webm|mkv)(\?|$)/i', $url)) {
                $type = 'video';
            }
        }

        if (!$url) {
            return redirect(route('beranda').'#galeri')->withErrors(['foto' => 'Upload foto/video atau isi URL dulu.'])->withInput();
        }

        Galeri::create([
            'url' => $url,
            'caption' => $data['caption'] ?? null,
            'type' => $type,
        ]);

        return redirect(route('beranda').'#galeri')->with('success', $type === 'video' ? 'Video ditambahkan ke galeri.' : 'Foto ditambahkan ke galeri.');
    }

    public function destroy(Galeri $galeri)
    {
        // Kalau file-nya diupload sendiri (bukan URL luar), hapus juga filenya dari storage.
        if (str_starts_with($galeri->url, '/storage/')) {
            $path = str_replace('/storage/', '', $galeri->url);
            Storage::disk('public')->delete($path);
        }

        $galeri->delete();
        return redirect(route('beranda').'#galeri')->with('success', 'Item galeri dihapus.');
    }
}
