<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $fillable = ['jawaban', 'tanggal', 'id_pertanyaan'];
    protected $visible = ['jawaban', 'tanggal', 'id_pertanyaan'];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }
}
