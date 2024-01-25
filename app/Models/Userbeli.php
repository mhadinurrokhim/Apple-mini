<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Userbeli extends Model
{
    use HasFactory;
    protected $fillable =[
        'jumlah',
        'metodepembayaran',
        'totalharga',
        'user_id',
        'produk_id'
    ];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function Produk()
    {
        return $this->belongsTo(Produk::class,'produk_id');
    }

}