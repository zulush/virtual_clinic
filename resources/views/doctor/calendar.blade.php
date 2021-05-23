@extends('layouts.app')

@section('content')

<div>
    <h1>calendar</h1>
    <a href="{{ route('set_working_days') }}">Set working days</a>
    <a href="{{ route('add_working_times') }}">Add working time</a>
</div>


@endsection
