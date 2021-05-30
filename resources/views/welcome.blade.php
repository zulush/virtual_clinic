@extends('layouts.app')

@section('content')

<div>
    <div>
        @if (auth()->user())
            @if (auth()->user()->isDoctor())
                <ul>
                    <li><a href="{{ route('calendar') }}">Calendar</a></li>
                    <li><a href="{{ route('get_appointements') }}">Mes rendez-vous non-confirmés</a></li>
                    <li><a href="{{ route('get_appointements_patient') }}">Mes rendez-vous (Autant que patient)</a></li>
                </ul>
                <p>You're a Doctor</p>
            @else
                <li><a href="{{ route('get_appointements_patient') }}">Mes rendez-vous</a></li>
                <p>You aren't a Doctor</p>
            @endif
            @if (auth()->user()->isAdmin())
                <li><a href="{{ route('admin') }}">Espace admin</a></li>
            @endif
            
        @else
            <p>you should login</p>
        @endif
    </div>
</div>

@endsection