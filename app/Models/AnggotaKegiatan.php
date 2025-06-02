<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaKegiatan extends Model
{
    protected $table = 'anggota_kegiatan';

    protected $fillable = ['nama', 'keterangan'];
}
