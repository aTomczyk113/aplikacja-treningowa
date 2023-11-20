@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Wybierz poziom trudności</div>
            <div class="card-body">
                @foreach($difficulty_levels as $level)
                    <a href="{{ route('showExercises', ['bodyPart' => $bodyPart, 'difficulty' => $level->id]) }}" class="btn btn-primary">{{$level->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
