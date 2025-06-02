<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = ['nim', 'nama', 'jabatan'];

    public function divisi() {
    return $this->belongsTo(Divisi::class);
    }

}