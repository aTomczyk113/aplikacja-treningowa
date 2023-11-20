@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Ćwiczenia</div>
            <div class="card-body">
                <h5>Ćwiczenia dla wybranej partii ciała i poziomu trudności:</h5>
                <!-- wyświetlanie jednego ćwiczenia -->
                <h2>{{ $exercise->name }}</h2>
                <p>{{ $exercise->description }}</p>

                <!-- Przycisk do pobrania następnego ćwiczenia -->
                <a href="{{ route('showExercises', ['bodyPart' => $exercise->body_part_id, 'difficulty' => $exercise->difficulty_level_id]) }}" class="btn btn-primary">Następne ćwiczenie</a>

                <a href="{{ route('wybierz-trening') }}" class="btn btn-primary">Wróć</a>
            </div>
        </div>
    </div>
@endsection
