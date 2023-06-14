<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'ptb_id','tgl','hasil_keg','lampiran'
    ];

    public function Ptb()
    {
        return $this->belongsTo(Ptb::class, 'ptb_id');
    }
    
    public function create2s()
    {
        return $this->hasMany(Create2::class, 'ptb_id', 'id');
    }
}
