@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Trening Klatka</div>
            <div class="card-body">
                <h5>Tutaj będą ćwiczenia dla klatki:</h5>
                <a href="{{ route('wybierz-trening') }}"
                   class="btn btn-primary">Wróć</a>
            </div>
        </div>
    </div>
@endsection
