<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'role' => ['required', 'string', 'max:255'],
        ]);

        Struktur::create([
            'role' => $data['role'],
            'name' => '-',
            'urutan' => Struktur::max('urutan') + 1,
        ]);

        return redirect(route('beranda').'#struktur')->with('success', 'Jabatan ditambahkan.');
    }

    public function update(Request $request, Struktur $struktur)
    {
        $data = $request->validate([
            'role' => ['required', 'string', 'max:255'],
            'name' => ['nullable', 'string', 'max:255'],
        ]);

        $struktur->update($data);

        return redirect(route('beranda').'#struktur')->with('success', 'Struktur diperbarui.');
    }

    public function destroy(Struktur $struktur)
    {
        $struktur->delete();
        return redirect(route('beranda').'#struktur')->with('success', 'Jabatan dihapus.');
    }
}
