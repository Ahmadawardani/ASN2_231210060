<?php

namespace App\Http\Controllers;

use App\Models\StrukturPanitia;
use Illuminate\Http\Request;

class StrukturPanitiaController extends Controller
{
    public function index()
    {
        $data = StrukturPanitia::all();
        return view('struktur_panitia.index', compact('data'));
    }

    public function create()
    {
        return view('struktur_panitia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'ketua_panitia' => 'required',
        ]);

        StrukturPanitia::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'ketua_panitia' => $request->ketua_panitia,
            'sekretaris_1' => $request->sekretaris_1,
            'sekretaris_2' => $request->sekretaris_2,
            'bendahara_1' => $request->bendahara_1,
            'bendahara_2' => $request->bendahara_2,
            'sie_acara' => explode(',', $request->sie_acara),
            'sie_humas' => explode(',', $request->sie_humas),
            'sie_medinfo' => explode(',', $request->sie_medinfo),
            'sie_perlengkapan' => explode(',', $request->sie_perlengkapan),
            'sie_konsumsi' => explode(',', $request->sie_konsumsi),
        ]);
        return redirect()->route('struktur_panitia.index')->with('success', 'Satruktur Panitia berhasil ditambahkan!');

        
    }

    public function show(StrukturPanitia $struktur_panitia)
    {
        return view('struktur_panitia.show', compact('struktur_panitia'));
    }

    public function edit(StrukturPanitia $struktur_panitia)
    {
        return view('struktur_panitia.edit', compact('struktur_panitia'));
    }

    public function update(Request $request, StrukturPanitia $struktur_panitia)
    {
        $struktur_panitia->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'ketua_panitia' => $request->ketua_panitia,
            'sekretaris_1' => $request->sekretaris_1,
            'sekretaris_2' => $request->sekretaris_2,
            'bendahara_1' => $request->bendahara_1,
            'bendahara_2' => $request->bendahara_2,
            'sie_acara' => explode(',', $request->sie_acara),
            'sie_humas' => explode(',', $request->sie_humas),
            'sie_medinfo' => explode(',', $request->sie_medinfo),
            'sie_perlengkapan' => explode(',', $request->sie_perlengkapan),
            'sie_konsumsi' => explode(',', $request->sie_konsumsi),
        ]);
        return redirect()->route('struktur_pantia.index')->with('success', 'Struktur Panitia berhasil diperbarui!');


        
    }

    public function destroy(StrukturPanitia $struktur_panitia)
    {
        $struktur_panitia->delete();
        return redirect()->route('struktur_panitia.index')->with('success', 'Struktur Panitia berhasil dihapus!');

    }
}
