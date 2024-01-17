@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        @if(isset($topPerformers))
                            <h2>Top 10 użytkowników</h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Login</th>
                                    <th scope="col">Wykonane Ćwiczenia</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($topPerformers as $performer)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $performer->name }}</td>
                                        <td>{{ $performer->completed_exercises_count }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="text-center">
                        <p>Liczba wykonanych ćwiczeń: <strong>{{ $exerciseCount }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
