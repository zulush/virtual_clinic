@extends('layouts.front')

@section('content')

    <div class="calendar">
        <h1>Add working times</h1>


        @if (auth()->user()->doctor->calendar != null)
            <form action="{{ route('store_working_times') }}" method="POST">
                @csrf
                <label for="cars">Choisissez le jour:</label>
                <select class="selectjour" id="day" name="day">
                    @if (auth()->user()->doctor->calendar->monday)
                        <option value="monday">Lundi</option>
                    @endif
                    @if (auth()->user()->doctor->calendar->tuesday)
                        <option value="tuesday">Mardi</option>
                    @endif
                    @if (auth()->user()->doctor->calendar->wednesday)
                        <option value="wednesday">Mercredi</option>
                    @endif
                    @if (auth()->user()->doctor->calendar->thursday)
                        <option value="thursday">Jeudi</option>
                    @endif
                    @if (auth()->user()->doctor->calendar->friday)
                        <option value="friday">Vendredi</option>
                    @endif
                    @if (auth()->user()->doctor->calendar->saturday)
                        <option value="saturday">Samedi</option>
                    @endif
                    @if (auth()->user()->doctor->calendar->sunday)
                        <option value="sunday">Dimanche</option>
                    @endif
                </select><br><br>
                <label for="start">Debut:</label>
                <select class="selecttemps" id="start" name="start">
                    @for ($i = 0; $i < 24; $i++)
                        <option value="{{ $i }}">{{ $i }}:00</option>
                    @endfor
                </select>
                <label for="start">Fin:</label>
                <select class="selecttemps" id="end" name="end">
                    @for ($i = 0; $i < 24; $i++)
                        <option value="{{ $i }}">{{ $i }}:00</option>
                    @endfor
                </select><br><br>
                <button class="submit" type="submit">
                    Add working time
                </button>
            @else
                <p>vous devez tout d'abord préciser les jours de votre travail</p>
                <a href="{{ route('set_working_days') }}">Set working days</a>
        @endif
        </form>
    </div>


@endsection
