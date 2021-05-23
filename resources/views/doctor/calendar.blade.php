@extends('layouts.app')

@section('content')

    <div>
        <h1>calendar</h1>


        {{-- @if ($work_times->count()) --}}
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
        {{-- @else
            <p>Vous n'avez pas encore spécifié les durées de travail</p>
        @endif --}}


        <a href="{{ route('set_working_days') }}">Set working days</a>
        <a href="{{ route('add_working_times') }}">Add working time</a>
    </div>


@endsection
