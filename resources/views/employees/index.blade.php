@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
            @foreach($employees as $employee)
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <a href="{{ route('employees.show', $employee) }}">{{ $employee->name }}</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
