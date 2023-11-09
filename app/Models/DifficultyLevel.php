<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DifficultyLevel extends Model
{
    use HasFactory;

    public function exercises() {
        return $this->hasMany(Exercise::class);
    }
}
