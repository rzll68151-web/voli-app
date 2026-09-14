<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'tanggal' => ['required', 'date'],
            'jam' => ['required'],
            'lokasi' => ['nullable', 'string', 'max:255'],
        ]);

        Agenda::create($data);

        return redirect(route('beranda').'#agenda')->with('success', 'Agenda berhasil ditambahkan.');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect(route('beranda').'#agenda')->with('success', 'Agenda dihapus.');
    }
}
