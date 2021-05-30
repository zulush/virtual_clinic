@extends('layouts.front')

@section('content')

    <div class="calendarediiiit">
        <h2>fixer votre calendrier</h2>


        @if (count($work_times))
        <table style="width:100%">  
            @foreach ($work_times as $day => $times )
                
                @if (count($times))
                    <tr>
                        <th>{{ $day }}</th>
                @endif
                @foreach ($times as $time)
                    <td>{{ $time->start }}:00 - {{ $time->end }}:00</td>
                @endforeach
                    </tr>
            @endforeach
        </table>
        @else
            <p>Votre calendrier est toujours vide</p>
        @endif

        <br><br><br>
        <a href="{{ route('set_working_days') }}">Set working days</a>
        <a href="{{ route('add_working_times') }}">Add working time</a>
        <a href="{{ route('get_confirmed_appointements') }}">Mes rendez-vous</a>
    </div>


@endsection
