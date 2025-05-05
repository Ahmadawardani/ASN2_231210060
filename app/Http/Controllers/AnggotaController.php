<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        // Validasi (opsional tapi disarankan)
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        // Simpan ke database
        Anggota::create($request->only(['nim', 'nama', 'jabatan']));

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan!');
    }

    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', compact('anggota'));
    }

    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->update($request->only(['nim', 'nama', 'jabatan']));

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diperbarui!');
    }

    public function confirmDelete($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.confirmDelete', compact('anggota'));
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus!');
    }
}