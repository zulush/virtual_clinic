@extends('layouts.app')

@section('content')

<div>
    <h2>Ajouter des médicaments à cette consultaion</h2>
    <p>( Vous pouvez ajouter plusieurs médicaments pour une seule consultation)</p>    
        <form action="{{ route("add_medicament", $consultation_id) }}" method="POST">
            @csrf
            <label for="name">Nom du médicament: </label><br>
            <input type="text" name="name"><br>
            <label for="usage_details">Détails d'utilisation</label><br>
            <textarea name="usage_details" id="" cols="30" rows="10"></textarea><br>
            <input type="submit" value="ajouter médicament">
        </form>

        <a href="{{ route('get_confirmed_appointements') }}">Quitter</a>


</div>

@endsection