@extends('layouts.app')

@section('content')

<div>
    <h2>Les rendez-vous à confirmer</h2>
    
    @foreach ($appointments as $appointment)
        <hr>
        <h4>{{ $appointment->date }} {{ $appointment->time }}</h4>
        <h5>Patient: {{ $appointment->getPatient()->first_name}} {{ $appointment->getPatient()->last_name}}</h5>
        <h5>tel: {{ $appointment->getPatient()->phone}}</h5>
        <p>{{ $appointment->reason }}</p>
        <form action="{{ route('valid_appointment', [$appointment->id, $appointment->getPatient()->id]) }}" method="POST">
            @csrf
            <input type="submit" value="Confirmer (sans remplaçant)">
        </form>

        <form action="{{ route('valid_appointment_substitute', [$appointment->id, $appointment->getPatient()->id]) }}" method="POST">
            <p>Ajouter un remplçant avant de confirmer</p>
            @csrf
            <select name="substitute_id" id="substitute">
                @foreach ($doctors as $substitute)
                    @if ($substitute->id != auth()->user()->doctor->id)
                        <option value="{{ $substitute->id }}">Dr.{{ $substitute->user->first_name }} {{ $substitute->user->last_name }}</option>
                    @endif
                @endforeach
            </select>
            <input type="submit" value="Confirmer (avec remplaçant)">
        </form>

    @endforeach


</div>

@endsection