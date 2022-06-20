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

    public function getUsers()
    {
        return $this->belongsTo("App\Models\User", "id", "id");
    }

    public function getOwner()
    {
        return $this->belongsTo("App\Models\Owner", "id_owner", "id");
    }
}
