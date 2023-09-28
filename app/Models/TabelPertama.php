<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelPertama extends Model
{
    use HasFactory;
    protected $table = 'data2'; // Ganti 'nama_tabel_pertama' dengan nama tabel sebenarnya
    protected $fillable = ['kode', 'matkul']; 
    public function tabelKedua()
    {
        return $this->hasMany(TabelKedua::class, 'kode', 'kode');
    }
}
