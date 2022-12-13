<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination;

class Kategori extends Model
{
    protected $paginationTheme = 'bootstrap';

    public function barangs(){
        return $this->hasMany(Barang::class);
    }

    protected $fillable = [
        'nama', 
        'gambar',
    ];
    
}
