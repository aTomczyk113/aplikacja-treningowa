<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingResultsTable extends Migration
{
    public function up()
    {
        Schema::create('training_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Klucz obcy do użytkownika, jeśli to jest potrzebne
            $table->decimal('result', 10, 2); // Wynik treningu (10 cyfr całkowitych, 2 miejsca po przecinku)
            $table->date('date'); // Data treningu
            $table->timestamps(); // Automatycznie generowane kolumny created_at i updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('training_results');
    }
}

