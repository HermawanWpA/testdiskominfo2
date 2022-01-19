<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    // use HasFactory;

     protected $table = "wifi";


       protected $fillable = [
        'id_lokasi', 'nama_wifi', 'status',
    ];

     public function maps()
    {
         return $this->belongsTo(Maps::class, 'id_lokasi', 'id');
    }

    public $timestamps = true;
}
