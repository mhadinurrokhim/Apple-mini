<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';

    protected $guarded = ['id'];

    public function pesanan() : BelongsTo
    {
        return $this->belongsTo(Pesanan::class);
    }
}
