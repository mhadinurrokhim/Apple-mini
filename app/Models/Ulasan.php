<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan';

    protected $fillable = [
        'id',
        'rating',
        'ulasan',
        'produk_id',
        'user_id',
    ];

    public function Produk()
    {
        return $this->belongsTo(Produk::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
