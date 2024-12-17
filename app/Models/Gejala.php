<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'gejala';

    // Primary key
    protected $primaryKey = 'id_gejala';

    // Jangan auto-increment jika id bukan integer
    public $incrementing = false;

    // Kolom yang bisa diisi
    protected $fillable = ['id_gejala', 'nama_gejala'];

    // Jika ada relasi lain, misalnya relasi dengan Penyakit (bila ada relasi)
    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'penyakit_gejala', 'id_gejala', 'id_penyakit');
    }
}
