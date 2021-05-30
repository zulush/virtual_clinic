@if(Session::has('admin')) 
@extends('layouts.admin')
@section('content')
<div class="main-content">
    @include('backend.includes.header')
    
    <main>
        <div class="doctorCreate">
            <h3 class="titre_edit">Create Doctor</h3>
            @if($errors)
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif
            
            @if(Session::has('error'))
                <p class="text-danger">{{session('error')}}</p>
            @endif
            <form method="POST">
                @csrf
                    <input type="text" class="badge" name="name" placeholder="Name"  ><br>
                    <input type="email" class="badge" name="email" placeholder="Email" required><br>
                    <input type="password" class="badge" name="password" placeholder="Password" required><br>
                    <input type="submit" class="badge creedit" value="Create Doctor">
            </form>
        </div>
    </main>
</div>
@endsection
@else
    <script>window.location = "/admin";</script>
@endif
