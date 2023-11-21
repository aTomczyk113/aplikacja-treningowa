@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-info">
            Wszystkie ćwiczenia zostały wykonane.
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            console.log("Przekierowanie...");
            window.location.replace("{{ route('welcome') }}");
        }, 5000);
    </script>
@stop
