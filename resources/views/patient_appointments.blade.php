@extends('layouts.front')

@section('content')


<div class="rendez-vous">
    @foreach ($appointments as $appointment)
        <div class="rendez-vousdai">
            <hr>
            <h2>Raison: {{ $appointment->reason }}</h2>
            <h3>Le {{ $appointment->date }} à {{ $appointment->time }}</h3>
            @if ($appointment->valid)
                <p>Confirmé</p>
            @else
                <p>Pas encore confirmé</p>
            @endif
            <form action="{{ route("delete_appointment", [$appointment->id]) }}" method="POST">
                @csrf
                <input class="submit" type="submit" value="Annuler">
            </form>
            <hr>
        </div>
    @endforeach
</div>

@endsection