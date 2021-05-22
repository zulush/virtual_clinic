@extends('layouts.app')

@section('content')

<div>
    <div>
        @if (auth()->user())
            @if (auth()->user()->isDoctor())
                <ul>
                    <a href="{{ route('calendar') }}">Calendar</a>
                </ul>
                <p>You're a Doctor</p>
            @else    
                <p>You aren't a Doctor</p>
            @endif
        @else
            <p>you should login</p>
        @endif
    </div>
</div>

@endsection