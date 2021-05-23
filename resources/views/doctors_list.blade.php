@extends('layouts.app')

@section('content')

    <div>
        @if (count($doctors))
                @foreach ($doctors as $doctor)
                    <hr>
                    <p>
                        Dr. {{ $doctor->first_name }} {{ $doctor->last_name }} |
                        {{ $doctor->region }} {{ $doctor->city }} |
                        {{ $doctor->consultation_cost }} Dh |
                        <a href="{{ route("doctor_infos") }}">Plus d'information</a> |
                        <a href="#">Demander un rendez-vous</a>
                    </p>
                    
                @endforeach
        @endif
    </div>

@endsection
