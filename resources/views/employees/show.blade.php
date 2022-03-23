@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-12 card mb-3 p-3">
                <div class="card-body">
                    <h1 class="card-title">{{$employee->name}}</h1>

                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $employee->positions->pluck('title')->implode(', ') }}
                    </h6>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Skills: {{ $employee->skills->pluck('title')->implode(' | ') }}
                    </h6>

                    @auth
                    <p class="text-muted">
                        phone: <a href="tel:{{ $employee->phone }}">{{ $employee->phone }}</a></br>
                        email: <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a>
                    </p>
                    @endauth
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
