<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLapangan extends Model
{
    use HasFactory;

    protected $table = "jenis_lapangan";

    protected $guarded = [''];

    public $timestamps = false;
}
