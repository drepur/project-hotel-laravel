<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = "tblkamar";

    protected $fillable = [
        "kodepegawai","jeniskamar","tipe","fasilitas","tarifkamar"
    ];

}
