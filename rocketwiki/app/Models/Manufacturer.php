<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $table = "manufacturer";


    public function Manufacturer()
    {
        return $this->hasMany(Rocket::class);
    }
}
