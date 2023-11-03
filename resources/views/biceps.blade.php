@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Trening Biceps - {{ $poziom }}</div>
            <div class="card-body">
                <h5>Ćwiczenie na dziś:</h5>
                <p>{{ $ćwiczenie }}</p>
            </div>
        </div>
    </div>
@endsection
