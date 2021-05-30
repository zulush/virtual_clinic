@extends('layouts.admin')

@section('content')
<div class="main-content">
    <main>
        <h2 class="dash-title">Espace Admin: {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h2>

        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-briefcase"></span>
                    <div>
                        <h5>Doctor</h5>
                        <h4>{{ $statistics->doctors }}</h4>
                    </div>
                </div>
            </div>

            <div class="card-single">
                <div class="card-body">
                    <span class="ti-briefcase"></span>
                    <div>
                        <h5>Rendez-vous</h5>
                        <h4>{{ $statistics->appointments }}</h4>
                    </div>
                </div>
            </div>

            <div class="card-single">
                <div class="card-body">
                    <span class="ti-briefcase"></span>
                    <div>
                        <h5>Patients</h5>
                        <h4>{{ $statistics->patients }}</h4>
                    </div>
                </div>
            </div>

            <div class="card-single">
                <div class="card-body">
                    <span class="ti-briefcase"></span>
                    <div>
                        <h5>Rendez-vous:non-confirmés</h5>
                        <h4>{{ $statistics->invalid_appointments }}</h4>
                    </div>
                </div>
            </div>

        <section class="recent">
            <h3>Recent doctors added</h3>
            <div class="table-responsive">
                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Region</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doc)
                            <tr>
                                <td> {{ $doc->region }} </td>
                                <td> {{ $doc->phone }} </td>
                                <td> {{ $doc->consultation_cost }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    
</div>
    

@endsection