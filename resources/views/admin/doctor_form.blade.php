@extends('layouts.admin')

@section('content')
<main>
    <div class="doctorCreate">
        <h3 class="titre_edit">Create Doctor</h3>
        <form action="{{ route('doctor_register') }}" method="POST">
            @csrf
                <input id="first_name" class="badge" name="first_name" type="text" placeholder="First name">
                <input id="last_name" class="badge" name="last_name" type="text" placeholder="last_name">
                <input id="email" class="badge" name="email" type="email" placeholder="Email">
                    @error('email')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <input id="city" class="badge" name="city" type="text" placeholder="city">
                    @error('city')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <input id="phonenumber" class="badge" name="phonenumber" type="text" placeholder="phonenumber">
                    @error('phonenumber')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <input id="specialty" class="badge" name="specialty" type="text" placeholder="Spécialité">
                <input id="region" class="badge" name="region" type="text" placeholder="Région">
                <input id="phone" class="badge" name="phone" type="text" placeholder="tel. fix">
                <input id="consultation_time" class="badge" name="consultation_time" type="text" placeholder="La durée de la consultaion">
                <input id="consultation_cost" class="badge" name="consultation_cost" type="text" placeholder="Le tarif de la consultaion">
                <input id="max_Appointment_time" class="badge" name="max_Appointment_time" type="number" placeholder="Max appointement time"> mois
                <input id="password" class="badge" name="password" type="password" placeholder="******************">
                    @error('password')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <input name="password_confirmation" class="badge" id="password_confirmation" type="password" placeholder="Repeat your password">
                <input type="submit" class="badge creedit" value="Ajouter Médecin">
                    
                            
        </form>
    </div>
</main>

@endsection