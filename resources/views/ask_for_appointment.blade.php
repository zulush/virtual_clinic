@extends('layouts.app')

@section('content')




    <div>
        <h1>Dr. {{ $doctor->user->first_name }} {{ $doctor->user->last_name }}</h1>
        @if ($doctor->calendar != null)
            
        <?php $calendar_id = $doctor->calendar->id ?>
            <form action="{{ route('store_appointment', $doctor->id) }}" method="POST">
                @csrf
                <div>
                    <label for="date">
                        Date:
                    </label>
                    <input id="appointment_date" class="appointment_date" data-dependent="time" name="appointment_date"
                        type="date" placeholder="Choississez une date...">
                    @error('appointment_date')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                    <p>
                        les jours de travail du médecin :
                        @if ($doctor->calendar->monday)
                            lundi
                        @endif
                        @if ($doctor->calendar->tuesday)
                            mardi
                        @endif
                        @if ($doctor->calendar->wednesday)
                            mercredi
                        @endif
                        @if ($doctor->calendar->thursday)
                            jeudi
                        @endif
                        @if ($doctor->calendar->friday)
                            vendredi
                        @endif
                        @if ($doctor->calendar->saturday)
                            samedi
                        @endif
                        @if ($doctor->calendar->sunday)
                            dimanche
                        @endif
                        <br> veuillez choisir une date qui correspondant à ces jours
                    </p>
                </div>
                <label for="time">Choississez entre les heures de travail du médecin:</label>
                <select id="time" name="time">


                </select>
                @error('time')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <div>
                    <textarea id="reason" name="reason" rows="4" cols="50">
                    La raison ...
                </textarea>
                </div>

                <div>
                    <button type="submit">
                        Demander
                    </button>
                </div>
            @else
                {{$calendar_id = ""}}
                <p>Dr. {{ $doctor->user->first_name }} {{ $doctor->user->last_name }} n'a pas encore ajouter sont empoi
                    de temps</p>
                <a href="{{ route('doctors_list') }}">Chercher un notre médecin</a>
        @endif
        </form>
    </div>

@endsection



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('change', '.appointment_date', function() {

            var date = $(this).val();

            var calendar_id = "{{ $calendar_id }}";
            

            if (date) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('getWorkingTimes') }}?calendar_id=" + calendar_id +
                        "&date=" + date,
                    success: function(res) {
                        console.log(res);
                        if (res) {
                            $("#time").empty();
                            $("#time").append('<option>Select Time</option>');
                            $.each(res, function(key, value) {
                                $("#time").append('<option value="' + value +
                                    ':00:00">' + value +
                                    ':00</option>');
                            });

                        } else {
                            $("#time").empty();
                        }
                    }
                });
            } else {
                $("#time").empty();
            }
        });
    });

</script>
