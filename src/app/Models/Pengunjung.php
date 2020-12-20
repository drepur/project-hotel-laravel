<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $table = "tblpengunjung";

    protected $fillable = [
        "kodepengunjung","nama","alamat","tgllahir","jeniskelamin","nohp","noktp"
    ];


}
