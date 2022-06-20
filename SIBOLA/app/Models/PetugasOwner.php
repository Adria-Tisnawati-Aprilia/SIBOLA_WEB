<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasOwner extends Model
{
    use HasFactory;

    protected $table = "petugas_owner";

    protected $guarded = [''];

    public $timestamps = false;
}
