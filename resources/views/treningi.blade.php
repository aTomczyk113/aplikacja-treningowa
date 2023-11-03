@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Treningi</div>
            <div class="card-body">
                <h5>Wybierz partię ciała:</h5>
                <a href="{{ route('klatka') }}" class="btn btn-primary">Klatka</a>
                <a href="{{ route('plecy') }}" class="btn btn-primary">Plecy</a>
                <a href="{{ route('nogi') }}" class="btn btn-primary">Nogi</a>
                <a href="{{ route('biceps') }}" class="btn btn-primary">Biceps</a>
            </div>
        </div>
    </div>
@endsection
