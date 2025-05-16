<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota'; // Pastikan nama tabel sesuai dengan di database
    protected $fillable = ['nim', 'nama', 'jabatan'];
}