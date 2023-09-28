<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelKedua extends Model
{
    use HasFactory;
    protected $table = 'data1'; // Ganti 'nama_tabel_kedua' dengan nama tabel sebenarnya
    protected $fillable = ['id', 'nama', 'kode'];
}
