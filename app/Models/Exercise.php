<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function bodyPart()
    {
        return $this->belongsTo(BodyPart::class);
    }

    public function difficultyLevel()
    {
        return $this->belongsTo(DifficultyLevel::class);
    }
}
