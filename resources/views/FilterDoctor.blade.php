@extends('layouts.front')

@section('content')

    
    @if ( $nbr > 0 )
        <div class="space"></div>
        <div class="doctorsPage">
            @foreach ($doctors as $doctor)
            <div class="doctorPage">
                <h2>Dr. {{ $doctor->first_name }} {{ $doctor->last_name }}</h2> 
                <h3> {{ $doctor->region }} </h3> 
                <h3> {{ $doctor->city }} </h3> 
                <h3> Price :{{ $doctor->consultation_cost }} Dh </h3> 
                 
                <a href="{{ route("doctor_infos", $doctor->id) }}">Plus d'information</a> |
                @auth
                     <form action="{{ route('add_appointement', $doctor) }}"  method="get">
                        @csrf
                        <button class="buttondoctorpage" type="submit">Demander un rendez-vous</button>
                    </form>
                @endauth
                    
                </div> 
            @endforeach
        </div>         
    @else
        <h1 class="noresultat">No Resultat</h1>
    @endif
    
@endsection
