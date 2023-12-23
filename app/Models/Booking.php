<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $fillable = [
        'user_id',
        'tgl_transaksi',
        'tgl_booking',
        'jam',
        'customer_id',
        'capster_id',
        'paket_id',
        'status_bayar'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id');
    }

    public function capster()
    {
        return $this->belongsTo(Capster::class, 'capster_id');
    }

}
