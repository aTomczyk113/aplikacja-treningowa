@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Treningi</div>
            <div class="card-body">
                <h5>Wybierz partię ciała:</h5>
                @foreach($body_parts as $part)
                    <a href="{{ route('showBodyPartExercises', ['bodyPart' => $part->name]) }}" class="btn btn-primary">{{ $part->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
