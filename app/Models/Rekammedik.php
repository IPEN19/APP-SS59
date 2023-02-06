<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekammedik extends Model
{
    public function Ruang()
    {
        return $this->hasOne(Ruang::class,"id","ruangs_id");
    }
}
