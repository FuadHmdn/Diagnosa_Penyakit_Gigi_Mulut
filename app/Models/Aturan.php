<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'aturan';

    // Primary key
    protected $primaryKey = 'id_aturan';

    // Kolom yang bisa diisi
    protected $fillable = ['gejalas_ids', 'penyakit_ids'];

    // Relasi gejalas dan penyakit
    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class, 'aturan_gejala', 'aturan_id', 'gejala_id');
    }

    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'aturan_penyakit', 'aturan_id', 'penyakit_id');
    }
}
