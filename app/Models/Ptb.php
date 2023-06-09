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
        'tgl',
        'progressTerakhir',
        'status',
        'deadline',
        'permasalahan',
        'progressReport',
        'pic',
    ];

    protected $casts = [
        'tgl' => 'date',
    ];
    protected $keyType = 'string';
    public $incrementing = false;

    public function details()
    {
        return $this->hasMany(Detail::class, 'ptb_id');
    }
    
    public function create2s()
    {
        return $this->hasMany(Create2::class, 'ptb_id', 'id');
    }
}