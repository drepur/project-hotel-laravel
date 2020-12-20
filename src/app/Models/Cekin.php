<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cekin extends Model
{
    use HasFactory;

    protected $table = "tblcekin";

    protected $fillable = [
        "kodecekin","kodepesan","kodekamar","tglmasuk","tglkeluar"
    ];
}
