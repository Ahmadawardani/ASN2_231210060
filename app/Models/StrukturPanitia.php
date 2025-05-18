<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrukturPanitia extends Model
{
    protected $table = 'struktur_panitia';

    protected $fillable = [
        'nama_kegiatan',
        'ketua_panitia',
        'sekretaris_1',
        'sekretaris_2',
        'bendahara_1',
        'bendahara_2',
        'sie_acara',
        'sie_humas',
        'sie_medinfo',
        'sie_perlengkapan',
        'sie_konsumsi',
    ];

    protected $casts = [
        'sie_acara' => 'array',
        'sie_humas' => 'array',
        'sie_medinfo' => 'array',
        'sie_perlengkapan' => 'array',
        'sie_konsumsi' => 'array',
    ];
}
