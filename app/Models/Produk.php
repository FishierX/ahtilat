<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategoris()
    {
        return $this->belongsTo(KategoriProduk::class, 'id_kategori');
    }
}
