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
                        <a href="{{ route("doctor_infos", $doctor->id) }}">Plus d'information</a> |
                        
                        @auth
                             <form action="{{ route('add_appointement', $doctor) }}"  method="get">
                                @csrf
                                <button type="submit">Demander un rendez-vous</button>
                            </form>
                        @endauth
                       
                    </p>
                    
                @endforeach
        @endif
    </div>

@endsection
