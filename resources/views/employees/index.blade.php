@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                @foreach($employees as $employee)
                    <div class="col-6 mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('employees.show', $employee) }}">{{ $employee->name }}</a></h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{ $employee->positions->pluck('title')->implode(', ') }}
                            </h6>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row text-center mt-4">
                {{ $employees->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
