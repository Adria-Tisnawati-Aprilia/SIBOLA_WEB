<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory;

    protected $table = "arena";

    protected $guarded = [''];

    public $timestamps = false;

    public function getIdUser()
    {
        return $this->belongsTo("App\Models\User", "id_users", "id");
    }
}
