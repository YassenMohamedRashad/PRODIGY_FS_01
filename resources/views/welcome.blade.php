@extends('layouts.main')

@section('content')
@auth
    auth users
@endauth
@guest
    guest users
@endguest

<h1 class="font-Rubik font-extrabold">Test Font</h1>
@endsection
