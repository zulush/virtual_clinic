@extends('layouts.app')

@section('content')

    <div>
        <h1>calendar</h1>


        @if ($work_times->count())
            <p>Lundi : </p>
            @foreach ($work_times as $work_time)
                @if ($work_time->day == 'monday')
                    <p> {{ $work_time->start }}:00 - {{ $work_time->end }}:00</p>
                @endif
            @endforeach
            <hr>
            <p>Mardi : </p>
            @foreach ($work_times as $work_time)
                @if ($work_time->day == 'tuesday')
                    <p> {{ $work_time->start }}:00 - {{ $work_time->end }}:00</p>
                @endif
            @endforeach
            <hr>
            <p>Mercredi : </p>
            @foreach ($work_times as $work_time)
                @if ($work_time->day == 'wednesday')
                    <p> {{ $work_time->start }}:00 - {{ $work_time->end }}:00</p>
                @endif
            @endforeach
            <hr>
            <p>Jeudi : </p>
            @foreach ($work_times as $work_time)
                @if ($work_time->day == 'thursday')
                    <p> {{ $work_time->start }}:00 - {{ $work_time->end }}:00</p>
                @endif
            @endforeach
            <hr>
            <p>Vendredi : </p>
            @foreach ($work_times as $work_time)
                @if ($work_time->day == 'friday')
                    <p> {{ $work_time->start }}:00 - {{ $work_time->end }}:00</p>
                @endif
            @endforeach
            <hr>
            <p>Samedi : </p>
            @foreach ($work_times as $work_time)
                @if ($work_time->day == 'saturday')
                    <p> {{ $work_time->start }}:00 - {{ $work_time->end }}:00</p>
                @endif
            @endforeach
            <hr>
            <p>Dimanche : </p>
            @foreach ($work_times as $work_time)
                @if ($work_time->day == 'sunday')
                    <p> {{ $work_time->start }}:00 - {{ $work_time->end }}:00</p>
                @endif
            @endforeach
        @else
            <p>Vous n'avez pas encore spécifié les durées de travail</p>
        @endif


        <a href="{{ route('set_working_days') }}">Set working days</a>
        <a href="{{ route('add_working_times') }}">Add working time</a>
    </div>


@endsection
