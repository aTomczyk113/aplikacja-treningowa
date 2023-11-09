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
                <a href="{{ route('wybierz-trening') }}" class="btn btn-primary">Wróć</a>
            </div>
        </div>
    </div>
@endsection
