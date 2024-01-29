<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Node\Expr\FuncCall;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'produk_id',
        'nama_produk',
        'path_produk',
        'harga',
        'stok',
        'deskripsi',
        'kategori_id'

    ];


    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function Userbeli()
    {
        return $this->hasMany(Userbeli::class);
    }
    public function Checkout()
    {
        return $this->hasMany(Checkout::class);
    }
    public function Ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }
}
