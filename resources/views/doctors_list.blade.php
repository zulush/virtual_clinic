@extends('layouts.front')

@section('content')

    <div class="barFilter">
        <form action="/list/filter" method="POST" >
            @csrf
            <input type="text" name="price" placeholder="  Price choice" >
            <input type="text" name="specialty" placeholder=" Choix de specilaite" >
            <select name="region" id="region" >
                <option value="Tanger-Tétouan-Al Hoceïma">   Tanger-Tétouan-Al Hoceïma</option>
                <option value="L'Oriental">   L'Oriental</option>
                <option value="Fès-Meknès">   Fès-Meknès</option>
                <option value="Rabat-Salé-Kénitra">   Rabat-Salé-Kénitra</option>
                <option value="Béni Mellal-Khénifra">   Béni Mellal-Khénifra</option>
                <option value="Casablanca-Settat">   Casablanca-Settat</option>
                <option value="Marrakech-Safi">   Marrakech-Safi</option>
                <option value="Drâa-Tafilalet">   Drâa-Tafilalet</option>
                <option value="Souss-Massa">   Souss-Massa</option>
                <option value="Guelmim-Oued Noun">   Guelmim-Oued Noun</option>
                <option value="Laâyoune-Sakia El Hamra">   Laâyoune-Sakia El Hamra</option>
                <option value="Dakhla-Oued Ed-Dahab">   Dakhla-Oued Ed-Dahab</option>
            </select>
            <input type="submit" value="Filtered">
        </form>
    </div>

    <div class="doctorsPage">
        @if (count($doctors))
                @foreach ($doctors as $doctor)
                    <div class="doctorPage">
                        <h2>Dr. {{ $doctor->first_name }} {{ $doctor->last_name }}</h2> 
                        <h3> {{ $doctor->region }} </h3>  
                        <h3> {{ $doctor->city }} </h3> 
                        {{ $doctor->consultation_cost }} Dh |<br>
                        <a href="{{ route("doctor_infos", $doctor->id) }}">Plus d'information</a> |
                        @auth
                             <form action="{{ route('add_appointement', $doctor) }}"  method="get">
                                @csrf
                                <button class="buttondoctorpage" type="submit">Demander un rendez-vous</button>
                            </form>
                        @endauth
                       
                    </div> 
                @endforeach
        @endif
    </div>

@endsection
