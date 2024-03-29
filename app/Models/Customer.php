<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'id','nama','no_telp','alamat','user_id'
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

}
