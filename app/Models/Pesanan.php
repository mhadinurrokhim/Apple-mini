<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = "pesanan";
    protected $guarded = ["id"];

    // public function produk() : BelongsTo
    // {
    //     return $this->belongsTo(produk::class);
    // }
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function detailPesanan() : HasMany
    {
        return $this->hasMany(Detailpesanan::class);
    }
}
