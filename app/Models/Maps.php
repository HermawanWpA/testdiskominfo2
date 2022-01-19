<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    // use HasFactory;

      protected $table = "maps";


       protected $fillable = [
         'lokasi1', 'lokasi2',
    ];


    public $timestamps = true;
}
