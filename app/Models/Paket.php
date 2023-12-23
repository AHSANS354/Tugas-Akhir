<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'paket';
    protected $fillable = [
        'nama',
        'haircut',
        'keramas',
        'tonic',
        'creambath',
        'harga',
    ];

    public $timestamps = false;

    public function booking()
{
    return $this->hasMany(Booking::class, 'paket_id');
}
}
