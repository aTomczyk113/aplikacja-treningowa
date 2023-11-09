@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $bodyPart->name }}</div>
            <div class="card-body">
                <h5>Ćwiczenia dla wybranej partii ciała:</h5>
                @foreach ($exercises as $exercise)
                    <h2>{{ $exercise->name }}</h2>
                    <p>{{ $exercise->description }}</p>
                @endforeach
                <a href="{{ route('wybierz-trening') }}" class="btn btn-primary">Wróć</a>
            </div>
        </div>
    </div>
@endsection
