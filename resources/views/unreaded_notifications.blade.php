@extends('layouts.front')

@section('content')

<div class="rendez-vous">
    <h3>Notifications non lus</h3>
@foreach ($notifications as $notification)
    <div class="rendez-vousdai">
        <hr>
        <h5>{{$notification->created_at}}</h5>
        <p>{{ $notification->content }}</p>
        <form action="{{ route('readed_notification', $notification->id) }}" method="POST">
            @csrf
            <input class="submit" type="submit" value="Marquer comme lu">
        </form>
        <hr>
    </div>
@endforeach
</div>


@endsection
