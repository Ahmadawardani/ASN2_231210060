<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('kegiatan', compact('kegiatan'));
    }

    public function create()
{
    return view('kegiatan_create'); 
}

public function store(Request $request)
{
    $request->validate([
        'nama_kegiatan' => 'required',
        'deskripsi' => 'required',
        'tanggal' => 'required|date',
        'tempat' => 'required',
    ]);

    Kegiatan::create($request->all());

    return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
}

public function edit($id)
{
    $kegiatan = Kegiatan::findOrFail($id);
    return view('kegiatan_edit', compact('kegiatan'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_kegiatan' => 'required',
        'deskripsi' => 'required',
        'tanggal' => 'required|date',
        'tempat' => 'required',
    ]);

    $kegiatan = Kegiatan::findOrFail($id);
    $kegiatan->update($request->all());

    return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
}

public function destroy($id)
{
    $kegiatan = Kegiatan::findOrFail($id);
    $kegiatan->delete();

    return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
}

}
