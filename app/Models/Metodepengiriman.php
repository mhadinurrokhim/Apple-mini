<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodepengiriman extends Model
{
    use HasFactory;
    protected $table = 'metode_pengiriman';
    protected $fillable = [
        'nama_kurir',
    ];
}
