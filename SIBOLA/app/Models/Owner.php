<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = "owner";

    protected $guarded = [''];

    public function getUsers()
    {
        return $this->belongsTo("App\Models\User", "id_users", "id");
    }
}
