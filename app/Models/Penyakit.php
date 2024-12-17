<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'penyakits'; // Pastikan nama tabel sesuai dengan yang digunakan

    // Primary key
    protected $primaryKey = 'id_penyakit';

    // Kolom yang bisa diisi
    protected $fillable = ['id_penyakit', 'nama_penyakit'];

    // Relasi dengan gejala
    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class, 'penyakit_gejala', 'id_penyakit', 'id_gejala');
    }
}
