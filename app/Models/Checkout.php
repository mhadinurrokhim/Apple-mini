<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'produk_id',
        'jumlah',
        'total'
    ];
    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function Produk()
    {
        return $this->belongsTo(Produk::class,'produk_id');
    }
}
