@extends('layouts.app')

@section('content')

<h3>Notifications non lus</h3>
@foreach ($notifications as $notification)

    <hr>
    <h5>{{$notification->created_at}}</h5>
    <p>{{ $notification->content }}</p>
    <form action="{{ route('readed_notification', $notification->id) }}" method="POST">
        @csrf
        <input type="submit" value="Marquer comme lu">
    </form>
@endforeach


@endsection
