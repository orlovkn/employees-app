@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-12 card mb-3 p-3">
                <h1>{{$employee->name}}</h1>

                {{ $employee->phone }}
            </div>
        </div>
    </div>
</div>
@endsection
