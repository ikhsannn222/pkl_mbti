<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $fillable = ['pertanyaan', 'jawaban', 'id_jenis_kepribadian'];
    protected $visible = ['pertanyaan', 'jawaban', 'id_jenis_kepribadian'];

    public function jenis()
    {
        return $this->belongsTo(JenisKepribadian::class, 'id_jenis_kepribadian');
    }
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'id_pertanyaan');
    }
}
