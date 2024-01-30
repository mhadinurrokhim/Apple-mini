<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detailpesanan extends Model
{
    use HasFactory;
    protected $table = 'detail_pesanan';
    protected $guarded = [
        'id'
    ];

    public function pesanan(): BelongsTo
    {
        return $this->belongsTo(Pesanan::class);
    }
    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
    public function pembayaran(): BelongsTo
    {
        return $this->belongsTo(Pembayaran::class);
    }
}
