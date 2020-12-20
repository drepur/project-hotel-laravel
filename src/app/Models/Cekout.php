<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cekout extends Model
{
    use HasFactory;

    protected $table = "tblcekout";

    protected $fillable = [
        "kodecekout","kodecekin","kodepesan","tglcekout"
    ];
}
