@extends('layouts.dashboard')
@section('content')

   <h1 style="background-blend-mode: color"> {{ $user->name }} </h1>
    <h3> {{ $user->email }} </h3>

   <a href="/admin/users" class="btn btn-outline-primary ">Back</a>

@endsection
