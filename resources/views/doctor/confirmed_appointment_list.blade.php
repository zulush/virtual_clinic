@extends('layouts.app')

@section('content')

<div>
    <h2>Les rendez-vous à confirmer</h2>
    
    @foreach ($appointments as $appointment)
        <hr>
        <h4>{{ $appointment->date }} {{ $appointment->time }}</h4>
        <h5>Patient: {{ $appointment->getPatient()->first_name}} {{ $appointment->getPatient()->last_name}}</h5>
        <h5>tel: {{ $appointment->getPatient()->phonenumber}}</h5>
        <p>{{ $appointment->reason }}</p>
        <form action="{{ route('add_consultation', $appointment->id) }}" method="POST">
            @csrf
            <label for="temprature">Température: </label>
            <input type="text" name="temperature"><br>
            <label for="weight">Poids</label>
            <input type="text" name="weight"><br>
            <label for="blood_pressure">Tension</label>
            <input type="text" name="blood_pressure"><br>
            <label for="details">Détails</label><br>
            <textarea name="details" id="" cols="30" rows="10"></textarea><br>
            <input type="submit" value="ajouter consultation">
        </form>

    @endforeach


</div>

@endsection