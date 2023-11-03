@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ćwiczenia na poziomie początkującym</h2>
        <p>Wylosowany poziom trudności: {{ $poziom }}</p>
    </div>
@endsection
