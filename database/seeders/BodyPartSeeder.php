<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BodyPart;

class BodyPartSeeder extends Seeder
{
    public function run()
    {
        $bodyParts = ["Klatka", "Plecy", "Nogi", "Biceps"];

        foreach ($bodyParts as $part) {
            BodyPart::create(['name' => $part]);
        }
    }
}
