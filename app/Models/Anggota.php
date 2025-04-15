<?php

namespace App\Models;

class Anggota
{
    // Data sementara untuk anggota
    private static $anggota = [
        1 => ['nim' => '231210060', 'nama' => 'Salisa Ahmad Wardani', 'jabatan' => 'Ketua HMPS'],
        2 => ['nim' => '231210057', 'nama' => 'Bima Galih Saputra', 'jabatan' => 'Wakil Ketua HMPS'],
    ];

    // Mendapatkan semua anggota
    public static function all()
    {
        return self::$anggota;
    }

    // Menyimpan anggota baru
    public static function store($data)
    {
        $id = count(self::$anggota) + 1;
        self::$anggota[$id] = $data;
        return self::$anggota[$id];
    }

    // Mendapatkan anggota berdasarkan ID
    public static function find($id)
    {
        return self::$anggota[$id] ?? null;
    }

    // Memperbarui anggota berdasarkan ID
    public static function update($id, $data)
    {
        if (isset(self::$anggota[$id])) {
            self::$anggota[$id] = $data;
            return self::$anggota[$id];
        }
        return null;
    }

    // Menghapus anggota berdasarkan ID
    public static function delete($id)
    {
        if (isset(self::$anggota[$id])) {
            unset(self::$anggota[$id]);
            return true;
        }
        return false;
    }
}