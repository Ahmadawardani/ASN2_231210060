<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';
    protected $fillable = ['nama_divisi', 'deskripsi'];

    public function anggota() {
    return $this->hasMany(Anggota::class);
    }

}
