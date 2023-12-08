<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capster extends Model
{
    use HasFactory;
    protected $table = 'capster';
    protected $fillable = [
        'nama','no_telp','email'
    ];

    public $timestamps = false;
}
