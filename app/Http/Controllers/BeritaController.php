<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_berita' => 'required',
            'deskripsi' => 'required',
            'tanggal_publikasi' => 'required|date',
        ]);

        Berita::create($request->all());
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_berita' => 'required',
            'deskripsi' => 'required',
            'tanggal_publikasi' => 'required|date',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update($request->all());
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function show($id)
{
    $berita = Berita::findOrFail($id);
    return view('berita.show', compact('berita'));
}


    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
