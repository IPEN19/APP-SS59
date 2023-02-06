<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    public function Rekammedik()
    {
        return $this->belongsTo(Rekammedik::class);
    }
}
