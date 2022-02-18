<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    use HasFactory;
    public function option()
    {
        return $this->hasMany(Option::class);
    }
}
