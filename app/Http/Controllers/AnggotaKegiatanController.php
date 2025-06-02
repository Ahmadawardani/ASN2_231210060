<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKegiatan;
use Illuminate\Http\Request;

class AnggotaKegiatanController extends Controller
{
    public function index()
    {
        $anggota = AnggotaKegiatan::all();
        return view('anggota_kegiatan.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota_kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        AnggotaKegiatan::create($request->only('nama', 'keterangan'));

        return redirect()->route('anggota_kegiatan.index')->with('success', 'Data berhasil disimpan.');
    }

    // Fungsi show untuk detail data
    public function show($id)
    {
        $anggota = AnggotaKegiatan::findOrFail($id);
        return view('anggota_kegiatan.show', compact('anggota'));
    }

    public function edit($id)
    {
        $anggota = AnggotaKegiatan::findOrFail($id);
        return view('anggota_kegiatan.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $anggota = AnggotaKegiatan::findOrFail($id);
        $anggota->update($request->only('nama', 'keterangan'));

        return redirect()->route('anggota_kegiatan.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $anggota = AnggotaKegiatan::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota_kegiatan.index')->with('success', 'Data berhasil dihapus.');
    }
}
