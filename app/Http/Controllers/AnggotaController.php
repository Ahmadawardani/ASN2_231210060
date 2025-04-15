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
        // Menampilkan semua anggota
        return view('anggota.index', ['anggota' => $this->anggota]);
    }

    public function create()
    {
        // Menampilkan form untuk menambah anggota baru
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        // Menyimpan anggota baru
        $id = count($this->anggota) + 1;
        $this->anggota[$id] = $request->only(['nim', 'nama', 'jabatan']);
        
        // Redirect ke halaman daftar anggota
        return redirect()->route('anggota.index');
    }

    public function show($id)
    {
        // Menampilkan detail anggota berdasarkan ID
        if (isset($this->anggota[$id])) {
            return view('anggota.show', ['anggota' => $this->anggota[$id]]);
        }

        return redirect()->route('anggota.index');
    }

    public function edit($id)
    {
        // Menampilkan form edit anggota
        if (isset($this->anggota[$id])) {
            return view('anggota.edit', ['anggota' => $this->anggota[$id]]);
        }

        return redirect()->route('anggota.index');
    }

    public function update(Request $request, $id)
    {
        // Memperbarui data anggota
        if (isset($this->anggota[$id])) {
            $this->anggota[$id] = $request->only(['nim', 'nama', 'jabatan']);
        }

        return redirect()->route('anggota.index');
    }

    public function confirmDelete($id)
    {
        // Menampilkan konfirmasi untuk menghapus anggota
        if (isset($this->anggota[$id])) {
            return view('anggota.confirmDelete', ['anggota' => $this->anggota[$id]]);
        }

        return redirect()->route('anggota.index');
    }

    public function destroy($id)
    {
        // Menghapus anggota berdasarkan ID
        if (isset($this->anggota[$id])) {
            unset($this->anggota[$id]);
        }

        return redirect()->route('anggota.index');
    }
}