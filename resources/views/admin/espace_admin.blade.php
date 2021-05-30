<h1>Espace Admin: {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h1>

<ul>
    <li><a href="{{ route('add_doctor') }}">Ajouter un médecin</a></li>

    <hr>
    <h3>Utilisateurs: </h3>
    <ul>
        <li>{{ $statistics->users }} utilisateurs</li>
        <li>{{ $statistics->doctors }} doctors</li>
        <li>{{ $statistics->patients }} patients</li>
        <li>{{ $statistics->admis }} admis</li>
    </ul>
    <hr>
    <h3>Rendez-vous:</h3>
    <ul>
        <li>{{ $statistics->appointments }} rendez-vous</li>
        <li>{{ $statistics->valid_appointments }} confirmés</li>
        <li>{{ $statistics->invalid_appointments }} non-confirmés</li>
    </ul>
    <hr>
    <h3>Consultation:</h3>
    <ul>
        <li>{{ $statistics->consultations }} consultations</li>
    </ul>
    <hr>
    <h3>Médicaments</h3>
    <ul>
        <li>{{ $statistics->medicaments }} médicaments</li>
    </ul>
    <hr>
    <h3>Notifications:</h3>
    <ul>
        <li>{{ $statistics->notifications }} notifications</li>
        <li>{{ $statistics->readed_notifications }} lus</li>
        <li>{{ $statistics->unreaded_notifications }} non-lus</li>
    </ul>
    <hr>


</ul>
