<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyPart extends Model
{
    protected $table = 'body_parts';

    public function exercises() {
        return $this->hasMany(Exercise::class);
    }
}
