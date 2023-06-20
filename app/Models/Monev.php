<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Monev extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'kode',
        'nama_pt',
        'tanggal_monev',
        'alamat_monev',
        'alamat_direktori',
        'alamat_pddikti',
        'hasil_monev',
    ];

    protected $casts = [
        'tanggal_monev' => 'date',
    ];
}
