<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Ptb extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'kode',
        'pt',
        'progressTerakhir',
        'status',
        'tgl',
        'deadline',
        'permintaan',
        'progressReport',
        'pic',
        'kegiatan',
        'hasil_keg',
        'lampiran',
        'ket',
    ];

    protected $casts = [
        'tgl' => 'date',
    ];
}