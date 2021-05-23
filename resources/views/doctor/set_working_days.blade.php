@extends('layouts.app')

@section('content')

<div>
    <h1>Set working days</h1>
    <form action="{{ route('store_working_days') }}" method="POST">
        @csrf
        <input type="checkbox" id="monday" name="monday" value="monday">
        <label for="monday"> Lundi</label><br>
        <input type="checkbox" id="tuesday" name="tuesday" value="tuesday">
        <label for="tuesday"> Mardi</label><br>
        <input type="checkbox" id="wednesday" name="wednesday" value="wednesday">
        <label for="wednesday"> Mercredi</label><br>
        <input type="checkbox" id="thursday" name="thursday" value="thursday">
        <label for="thursday"> Jeudi</label><br>
        <input type="checkbox" id="friday" name="friday" value="friday">
        <label for="friday"> Vendredi</label><br>
        <input type="checkbox" id="saturday" name="saturday" value="saturday">
        <label for="saturday"> Samedi</label><br>
        <input type="checkbox" id="sunday" name="sunday" value="sunday">
        <label for="sunday"> Dimanche</label><br>
        <button type="submit">
            Set working days
        </button>
    </form>
</div>


@endsection
