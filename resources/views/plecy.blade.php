@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Trening Plecy</div>
            <div class="card-body">
                <h5>Wybierz poziom trudności:</h5>
                <a href="{{ route('plecy-początkujący') }}" class="btn btn-primary">Początkujący</a>
                <a href="{{ route('plecy-średni') }}" class="btn btn-primary">Średni</a>
                <a href="{{ route('plecy-zaawansowany') }}" class="btn btn-primary">Zaawansowany</a>
            </div>
        </div>
    </div>
@endsection
