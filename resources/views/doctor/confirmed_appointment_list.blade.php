@extends('layouts.front')

@section('content')

<div class="calendarediiiit">
    <h2>Les rendez-vous à confirmer</h2>
    
    @foreach ($appointments as $appointment)
        <div class="rndconf">
            <h3>Patient: {{ $appointment->getPatient()->first_name}} {{ $appointment->getPatient()->last_name}}</h3>
            <h4>{{ $appointment->reason }}</h4>
            <h6>{{ $appointment->date }} {{ $appointment->time }}</h6>
            <form action="{{ route('add_consultation', $appointment->id) }}" method="POST">
                @csrf
                <input type="text" name="temperature" placeholder="Température:">
                <input type="text" name="weight" placeholder="Poids">
                <input type="text" name="blood_pressure" placeholder="Tension"><br>
                <textarea name="details" id="" cols="30" rows="5" placeholder="........ Detail">......Détails</textarea><br>
                <input class="submit" type="submit" value="ajouter consultation">
            </form>
            <hr>
        </div>
    @endforeach


</div>

@endsection