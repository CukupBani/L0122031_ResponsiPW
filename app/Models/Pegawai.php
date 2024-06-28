<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departemen; // Import model Departemen

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'usia',
        'id_departemen',
        'alamat'
    ];

    // Menghubungkan table pegawai dengan table departemen
    public function departemen() {
        return $this->belongsTo(Departemen::class, 'id_departemen');
    }
}
