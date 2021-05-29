@extends('layouts.app')

@section('content')


<div>
    @foreach ($appointments as $appointment)
        <hr>
        <p>Le {{ $appointment->date }} à {{ $appointment->time }}</p><br>
        <p>Raison: {{ $appointment->reason }}</p>
        @if ($appointment->valid)
            <p>Confirmé</p>
        @else
            <p>Pas encore confirmé</p>
        @endif
        <form action="{{ route("delete_appointment", [$appointment->id]) }}" method="POST">
            @csrf
            <input type="submit" value="Annuler">
        </form>
    @endforeach
</div>

@endsection