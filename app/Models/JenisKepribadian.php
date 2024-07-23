<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKepribadian extends Model
{
    use HasFactory;

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class, 'id_jenis_kepribadian');
    }
}
