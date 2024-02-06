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
        'total',
        'status',
        'reject_message'
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
