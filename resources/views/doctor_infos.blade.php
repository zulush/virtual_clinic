@extends('layouts.app')

@section('content')

    <div>
       <p>Dr. {{$doctor[0]->first_name}} {{$doctor[0]->last_name}}</p>
       <p>Région : {{$doctor[0]->region}} {{$doctor[0]->city}}</p>
       <p>Tel: {{$doctor[0]->phone}}</p>
       <p>Prix de consultation: {{$doctor[0]->consultation_cost}} Dh</p>
       <p>Durée de consultation: {{$doctor[0]->consultation_time}} Min</p>
       <p>Date la plus loin pour la prise de rendez-vous: {{$doctor[0]->consultation_prix}}</p>
    </div>

@endsection
