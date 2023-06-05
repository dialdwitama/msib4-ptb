<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','ptb_id','permintaan','kegiatan','hasil_keg', 'lampiran', 'ket'
    ];

    public function Ptb()
    {
        return $this->belongsTo(Ptb::class);
    }
}
