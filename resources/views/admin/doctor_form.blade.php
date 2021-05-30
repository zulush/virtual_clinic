<form action="{{ route('doctor_register') }}" method="POST">
    @csrf
    <div>
        <label for="first_name">
            First name
        </label>
        <input id="first_name" name="first_name" type="text" placeholder="First name">
    </div>
    <div>
        <label for="last_name">
            Last name
        </label>
        <input id="last_name" name="last_name" type="text" placeholder="last_name">
    </div>
    <div>
        <label for="email">
            Email
        </label>
        <input id="email" name="email" type="email" placeholder="Email">
            @error('email')
            <div>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="city">
            City
        </label>
        <input id="email" name="city" type="text" placeholder="city">
            @error('city')
            <div>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="Phonenumber">
            Phonenumber
        </label>
        <input id="phonenumber" name="phonenumber" type="text" placeholder="phonenumber">
            @error('phonenumber')
            <div>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="specialty">
            Spécialité
        </label>
        <input id="specialty" name="specialty" type="text" placeholder="Spécialité">
    </div>
    <div>
        <label for="region">
            Région
        </label>
        <input id="region" name="region" type="text" placeholder="Région">
    </div>
    <div>
        <label for="phone">
            Fix
        </label>
        <input id="phone" name="phone" type="text" placeholder="tel. fix">
    </div>
    <div>
        <label for="consultation_time">
            La durée de la consultation
        </label>
        <input id="consultation_time" name="consultation_time" type="text" placeholder="La durée de la consultaion">
    </div>
    <div>
        <label for="consultation_cost">
            Le tarif de la consultation
        </label>
        <input id="consultation_cost" name="consultation_cost" type="text" placeholder="Le tarif de la consultaion">
    </div>
    <div>
        <label for="max_Appointment_time">
            la date maximale de demande de rendez-vous d'ici 
        </label>
        <input id="max_Appointment_time" name="max_Appointment_time" type="number" placeholder="..."> mois
    </div>
    <div>
        <label for="password">
            Password
        </label>
        <input id="password" name="password" type="password" placeholder="******************">
            @error('password')
            <div>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="password_confirmation">Password again</label>
        <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Repeat your password">
    </div>
    <div>
        <button type="submit">
            Ajouter Médecin
        </button>
    </div>
</form>