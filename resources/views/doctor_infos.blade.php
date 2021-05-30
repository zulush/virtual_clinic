@extends('layouts.front')

@section('content')

    <div class="doctorinfo">
        <h1>Dr. {{ $doctor[0]->first_name }} {{ $doctor[0]->last_name }}</h1>
        <h3>Région : {{ $doctor[0]->region }} {{ $doctor[0]->city }}</h3>
        <h3>Tel: {{ $doctor[0]->phone }}</h3>
        <h3>Prix de consultation: {{ $doctor[0]->consultation_cost }} Dh</h3>
        <h3>Durée de consultation: {{ $doctor[0]->consultation_time }} h</h3>
        <p>Date la plus loin pour la prise de rendez-vous: {{ $doctor[0]->consultation_prix }}</p>

        @auth
            <form action="{{ route('add_appointement', $doctor[0]->id) }}" method="get">
                @csrf
                <button type="submit">Demander un rendez-vous</button>
            </form>
        @endauth
    </div>

@endsection
