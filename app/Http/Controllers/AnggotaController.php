<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Data sementara untuk anggota
    private $anggota = [
        1 => ['nim' => '231210060', 'nama' => 'Salisa Ahmad Wardani', 'jabatan' => 'Ketua HMPS'],
        2 => ['nim' => '231210057', 'nama' => 'Bima Galih Saputra', 'jabatan' => 'Wakil Ketua HMPS'],
    ];

    public function index()
    {
        // Mengirim array asli, index view pakai array syntax
        return view('anggota.index', ['anggota' => $this->anggota]);
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        // Simulasi menyimpan (tidak persist)
        $id = count($this->anggota) + 1;
        $this->anggota[$id] = $request->only(['nim', 'nama', 'jabatan']);

        return redirect()->route('anggota.index');
    }

    public function show($id)
    {
        if (! isset($this->anggota[$id])) {
            return redirect()->route('anggota.index');
        }

        // Ambil data array, tambahkan id, lalu cast ke object
        $data = $this->anggota[$id];
        $data['id'] = $id;
        $anggota = (object) $data;

        return view('anggota.show', compact('anggota'));
    }

    public function edit($id)
    {
        if (! isset($this->anggota[$id])) {
            return redirect()->route('anggota.index');
        }

        // Ambil data array, tambahkan id, lalu cast ke object
        $data = $this->anggota[$id];
        $data['id'] = $id;
        $anggota = (object) $data;

        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        if (isset($this->anggota[$id])) {
            $this->anggota[$id] = $request->only(['nim', 'nama', 'jabatan']);
        }

        return redirect()->route('anggota.index');
    }

    public function confirmDelete($id)
    {
        if (! isset($this->anggota[$id])) {
            return redirect()->route('anggota.index');
        }

        // Ambil data array, tambahkan id, lalu cast ke object
        $data = $this->anggota[$id];
        $data['id'] = $id;
        $anggota = (object) $data;

        return view('anggota.confirmDelete', compact('anggota'));
    }

    public function destroy($id)
    {
        if (isset($this->anggota[$id])) {
            unset($this->anggota[$id]);
        }

        return redirect()->route('anggota.index');
    }
}