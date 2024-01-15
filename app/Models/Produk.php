<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $guarded = [
        'id',
    ];


    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
    public function scopeOrderByDefault($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

}
