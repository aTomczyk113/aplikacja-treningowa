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
                <form method="POST" action="{{ route('exercise.next', ['bodyPartId' => $exercise->body_part_id, 'difficultyLevelId' => $exercise->difficulty_level_id]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Następne ćwiczenie</button>
                </form>
                <a href="{{ route('wybierz-trening') }}" class="btn btn-primary">Wróć</a>
            </div>
        </div>
    </div>
@endsection
