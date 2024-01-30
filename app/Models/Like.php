<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Produk()
    {
        return $this->belongsTo(Produk::class, 'post_id','id');
    }
}
