<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriRuangan extends Model
{
    use HasFactory;
    protected $table = 'kategori_ruangan';

    // one to many 
    // 1 kategori ruangan memiliki banyak ruangan
    public function ruangan()
    {
        return $this->hasMany(Ruangan::class);
    }
}
