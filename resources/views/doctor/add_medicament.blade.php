@extends('layouts.front')

@section('content')

<div class="calendarediiiit">
    <div class="mideca">
        <h2>Ajouter des médicaments à cette consultaion</h2>
        <p>( Vous pouvez ajouter plusieurs médicaments pour une seule consultation)</p>    
            <form action="{{ route("add_medicament", $consultation_id) }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nom du médicament:"><br>
                <textarea name="usage_details" id="" cols="30" rows="10">....Détails d'utilisation</textarea><br>
                <input class="submit" type="submit" value="ajouter médicament">
            </form>

            <a href="{{ route('get_confirmed_appointements') }}">Quitter</a>


    </div>
</div>

@endsection