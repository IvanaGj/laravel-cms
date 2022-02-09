@extends('layouts.dashboard')
@section('content')
    <a href="/admin/users/create" class="btn bg-gradient-primary">Create User</a>

    <table class="table">
        <thead>
        <tr style="color: #0d376f ">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created_At</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
@foreach($users as $user)
    <tr>
        <td><a href="/admin/users/{{ $user->id }}"> {{ $user->id }} </td>
        <td> {{ $user->name }} </td>
        <td> {{ $user->email }} </td>
        <td> {{ $user->created_at->diffForHumans() }} </td>
        <td><a href="/admin/users/{{ $user->id }}/edit" class="btn btn-outline-primary ">Edit User</a></td>
        <td>
            <form action="/admin/users/{{ $user->id }}" method="post">
                @method('delete')
                @csrf
                <button href="/admin/users/{{$user->id}}" type="submit" class="btn btn-outline-primary">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

        </tbody>
    {{ $users->links() }}
@endsection
